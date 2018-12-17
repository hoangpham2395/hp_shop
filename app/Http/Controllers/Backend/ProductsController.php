<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;
use App\Repositories\ProductRepository;
use App\Validators\ProductValidator;
use App\Model\Entities\Product;
use Illuminate\Http\Request;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductImageRepository;
use App\Repositories\ProductPriceRepository;
use App\Repositories\ProductAttributeRepository;
use App\Repositories\ProductValueRepository;
use App\Repositories\ProductGroupRepository;
use Illuminate\Support\Facades\DB;
use Session;

/**
 * 
 */
class ProductsController extends BackendController
{
	protected $_brandRepository;
	protected $_categoryRepository;
	protected $_productImageRepository;
	protected $_productPriceRepository;
    protected $_productAttributeRepository;
    protected $_productValueRepository;
    protected $_productGroupRepository;

	public function getBrandRepository() 
	{
		return $this->_brandRepository;
	}

	public function setBrandRepository($brandRepository) 
	{
		$this->_brandRepository = $brandRepository;
	}

	public function getCategoryRepository() 
	{
		return $this->_categoryRepository;
	}

	public function setCategoryRepository($categoryRepository) 
	{
		$this->_categoryRepository = $categoryRepository;
	}

	public function getProductImageRepository() 
	{
		return $this->_productImageRepository;
	}

	public function setProductImageRepository($productImageRepository) 
	{
		$this->_productImageRepository = $productImageRepository;
	}

    public function getProductPriceRepository()
    {
        return $this->_productPriceRepository;
    }

    public function setProductPriceRepository($productPriceRepository)
    {
        $this->_productPriceRepository = $productPriceRepository;
    }

    public function getProductAttributeRepository()
    {
        return $this->_productAttributeRepository;
    }

    public function setProductAttributeRepository($productAttributeRepository)
    {
        $this->_productAttributeRepository = $productAttributeRepository;
    }

    public function getProductValueRepository()
    {
        return $this->_productValueRepository;
    }

    public function setProductValueRepository($productValueRepository)
    {
        $this->_productValueRepository = $productValueRepository;
    }

    public function setProductGroupRepository($productGroupRepository)
    {
        $this->_productGroupRepository = $productGroupRepository;
    }

    public function getProductGroupRepository()
    {
        return $this->_productGroupRepository;
    }

	public function __construct(ProductRepository $productRepository, 
								ProductValidator $productValidator, 
								Product $product, 
								BrandRepository $brandRepository, 
								CategoryRepository $categoryRepository,
								ProductImageRepository $productImageRepository,
                                ProductPriceRepository $productPriceRepository,
                                ProductAttributeRepository $productAttributeRepository,
                                ProductValueRepository $productValueRepository,
                                ProductGroupRepository $productGroupRepository)
	{
		$this->setRepository($productRepository);
		$this->setValidator($productValidator);
		$this->setAlias($product->getTable());
		$this->setBrandRepository($brandRepository);
		$this->setCategoryRepository($categoryRepository);
		$this->setProductImageRepository($productImageRepository);
		$this->setProductPriceRepository($productPriceRepository);
        $this->setProductAttributeRepository($productAttributeRepository);
        $this->setProductValueRepository($productValueRepository);
        $this->setProductGroupRepository($productGroupRepository);
		parent::__construct();
	}

	protected function _prepareData() 
	{
		$brands = $this->getBrandRepository()->getListForDropDown();
		$categories = $this->getCategoryRepository()->getListForDropDown();
        $groups = $this->getProductGroupRepository()->getListForSelect('id', 'group');
        $productAttrs = $this->getProductAttributeRepository()->getListByGroups($groups);
		$params = [
			'brands' => $brands,
			'categories' => $categories,
			'origin' => getConfig('origin'),
			'type_sim' => getConfig('type_sim'),
            'groups' => $groups,
            'attrs' => $productAttrs,
		];
		$params = array_merge($params, parent::_prepareData());
		return $params;
	}

	public function store(Request $request) 
	{
        $data = $request->all();

        // Upload file to tmp folder if exist
        $this->_uploadToTmpIfExist($request);

        // Validate
        $valid = $this->getValidator()->validateCreate($data);
        if (!$valid) {
            return redirect()->back()->withErrors($this->getValidator()->errors())->withInput();
        }

        // Create
        $data = array_merge($data, $this->_prepareStore());
        DB::beginTransaction();
        try {
            $nextId = $this->getNextId();
            $this->getRepository()->create($data);

            // Add image in product_images
            if ($request->hasFile('image')) {
                $dataImage = [
	            	'product_id' => $nextId,
	            	'image' => $data['image'], 
	            	'type' => 1, 
	            	'ins_id' => getCurrentAdminId()
	            ];
                $this->getProductImageRepository()->create($dataImage);
            }

            // Add to product price
            $productPrices = array_get($data, 'ProductPrice');
            if (!empty($productPrices)) {
                foreach ($productPrices as $productPrice) {
                    $productPrice['product_id'] = $nextId;
                    $productPrice['ins_id'] = getCurrentAdmin();
                    $this->getProductPriceRepository()->create($productPrice);
                }
            }

            // Add to product value
            $productValues = array_get($data, 'ProductValue');
            if (!empty($productValues)) {
                foreach ($productValues as $attrId => $productValue) {
                    $dataPV = [
                        'product_id' => $nextId,
                        'attr_id' => $attrId,
                        'value' => $productValue,
                        'ins_id' => getCurrentAdminId()
                    ];
                    $this->getProductValueRepository()->create($dataPV);
                }
            }

            // Move file to medias if exist
            $this->_moveToMediasIfExist($data);
            DB::commit();

            Session::flash('success', getMessaage('create_success'));
            return redirect()->route($this->getAlias() . '.index');
        } catch (\Exception $e) {
            DB::rollBack();
            logError($e);
        }
        // Create failed
        $this->_deleteFileInTmpIfExist();
        return redirect()->route($this->getAlias() . '.index')->withErrors(['create_failed' => getMessaage('create_failed')]);
	}

	public function update(Request $request, $id) 
	{
        // Check id
        $entity = $this->getRepository()->findById($id);
        if (empty($entity)) {
            return redirect()->route($this->getAlias() . '.index')->withErrors(['id_invalid' => getMessaage('id_invalid')]);
        }

        $data = $request->all();

        // Upload file to tmp folder if exist
        $this->_uploadToTmpIfExist($request);

        // Validate
        $valid = $this->getValidator()->validateUpdate($data, $id);
        if (!$valid) {
            return redirect()->back()->withErrors($this->getValidator()->errors())->withInput();
        }

        // Update
        $data = array_merge($data, $this->_prepareUpdate());
        DB::beginTransaction();
        try {
            $this->getRepository()->update($data, $id);

            if ($request->hasFile('image')) {
            	$dataImage = [
	            	'product_id' => $id,
	            	'image' => $data['image'], 
	            	'type' => 1
	            ];
	            $productImage = $entity->images;
	            if (!empty($productImage[0])) {
	            	$dataImage = array_merge($dataImage, ['upd_id' => getCurrentAdminId()]);
	            	$this->getProductImageRepository()->update($dataImage, $productImage[0]->id);
	            } else {
	            	$dataImage = array_merge($dataImage, ['ins_id' => getCurrentAdminId()]);
	            	$this->getProductImageRepository()->create($dataImage);
	            }
            }
            // Move file to medias if exist
            $this->_moveToMediasIfExist($data);
            DB::commit();
            Session::flash('success', getMessaage('update_success'));
            return redirect()->route($this->getAlias() . '.index');
        } catch (\Exception $e) {
            DB::rollBack();
            logError($e);
        }
        // Update failed
        $this->_deleteFileInTmpIfExist();
        return redirect()->route($this->getAlias() . '.index')->withErrors(['update_failed' => getMessaage('update_failed')]);
	}

	public function destroy($id) 
	{
        // Check id
        $entity = $this->getRepository()->findById($id);
        if (empty($entity)) {
            return redirect()->route($this->getAlias() . '.index')->withErrors(['id_invalid' => getMessaage('id_invalid')]);
        }
        // Delete
        $data['del_flag'] = getConstant('DEL_FLAG.DELETED', 1);
        $data['upd_id'] = 1;
        DB::beginTransaction();
        try {
            $this->getRepository()->update($data, $id);
            
            $productImages = $entity->images;
            if (!empty($productImages)) {
            	foreach ($productImages as $productImage) {
            		$this->getProductImageRepository()->update($data, $productImage->id);
            	}
            }

            DB::commit();
            Session::flash('success', getMessaage('delete_success'));
            return redirect()->route($this->getAlias() . '.index');
        } catch(\Exception $e) {
            DB::rollBack();
            logError($e);
        }
        // Delete failed
        return redirect()->route($this->getAlias() . '.index')->withErrors(['delete_failed' => getMessaage('delete_failed')]);
	}
}