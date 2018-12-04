<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;
use App\Repositories\ProductGroupRepository;
use App\Validators\ProductGroupValidator;
use App\Model\Entities\ProductGroup;
use Illuminate\Http\Request;

/**
 * 
 */
class ProductGroupController extends BackendController
{
	public function __construct(ProductGroupRepository $productGroupRepository, ProductGroupValidator $productGroupValidator, ProductGroup $productGroup) 
	{
		$this->setRepository($productGroupRepository);
		$this->setValidator($productGroupValidator);
		$this->setAlias($productGroup->getTable());
		parent::__construct();
	}
}