<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;
use App\Repositories\ProductRepository;
use App\Validators\ProductValidator;
use App\Model\Entities\Product;
use Illuminate\Http\Request;

/**
 * 
 */
class ProductsController extends BackendController
{
	public function __construct(ProductRepository $productRepository, ProductValidator $productValidator, Product $product) 
	{
		$this->setRepository($productRepository);
		$this->setValidator($productValidator);
		$this->setAlias($product->getTable());
		parent::__construct();
	}
}