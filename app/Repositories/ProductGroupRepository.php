<?php 

namespace App\Repositories;

use App\Repositories\Base\CustomRepository;
use App\Model\Entities\ProductGroup;
use App\Validators\ProductGroupValidator;

/**
 * 
 */
class ProductGroupRepository extends CustomRepository
{
	function model() 
	{
		return ProductGroup::class;
	}

	public function validator() 
	{
		return ProductGroupValidator::class;
	}
}