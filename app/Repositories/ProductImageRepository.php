<?php 

namespace App\Repositories;

use App\Repositories\Base\CustomRepository;
use App\Model\Entities\ProductImage;
use App\Validators\ProductImageValidator;

/**
 * 
 */
class ProductImageRepository extends CustomRepository
{
	function model() 
	{
		return ProductImage::class;
	}

	public function validator() 
	{
		return ProductImageValidator::class;
	}
}