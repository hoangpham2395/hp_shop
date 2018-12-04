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

	public function __construct(ProductRepository $productRepository, 
								ProductValidator $productValidator, 
								Product $product, 
								BrandRepository $brandRepository, 
								CategoryRepository $categoryRepository,
								ProductImageRepository $productImageRepository) 
	{
		$this->setRepository($productRepository);
		$this->setValidator($productValidator);
		$this->setAlias($product->getTable());
		$this->setBrandRepository($brandRepository);
		$this->setCategoryRepository($categoryRepository);
		$this->setProductImageRepository($productImageRepository);
		parent::__construct();
	}

	protected function _prepareData() 
	{
		$brands = $this->getBrandRepository()->getListForDropDown();
		$categories = $this->getCategoryRepository()->getListForDropDown();
		$params = [
			'brands' => $brands,
			'categories' => $categories,
			'origin' => getConfig('origin'),
			'type_sim' => getConfig('type_sim'),
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

            $this->getRepository()->create($data);
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