<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;
use App\Repositories\BrandRepository;
use App\Validators\BrandValidator;
use App\Model\Entities\Brand;
use Illuminate\Http\Request;

/**
 * 
 */
class BrandsController extends BackendController
{
	public function __construct(BrandRepository $brandRepository, BrandValidator $brandValidator, Brand $brand) 
	{
		$this->setRepository($brandRepository);
		$this->setValidator($brandValidator);
		$this->setAlias($brand->getTable());
		parent::__construct();
	}

}