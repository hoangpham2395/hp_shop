<?php 

namespace App\Repositories;

use App\Repositories\Base\CustomRepository;
use App\Model\Entities\Product;
use App\Validators\ProductValidator;

/**
 * 
 */
class ProductRepository extends CustomRepository
{
	function model() 
	{
		return Product::class;
	}

	public function validator() 
	{
		return ProductValidator::class;
	}
}
?>