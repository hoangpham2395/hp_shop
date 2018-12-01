<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;
use App\Repositories\ProductRepository;
use App\Validators\ProductValidator;
use App\Model\Entities\Product;
use Illuminate\Http\Request;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;

/**
 * 
 */
class ProductsController extends BackendController
{
	protected $_brandRepository;
	protected $_categoryRepository;

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

	public function __construct(ProductRepository $productRepository, ProductValidator $productValidator, Product $product, BrandRepository $brandRepository, CategoryRepository $categoryRepository) 
	{
		$this->setRepository($productRepository);
		$this->setValidator($productValidator);
		$this->setAlias($product->getTable());
		$this->setBrandRepository($brandRepository);
		$this->setCategoryRepository($categoryRepository);
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
}