<?php 

namespace App\Repositories;

use App\Repositories\Base\CustomRepository;
use App\Model\Entities\Brand;
use App\Validators\BrandValidator;

/**
 * 
 */
class BrandRepository extends CustomRepository
{
	function model() 
	{
		return Brand::class;
	}

	public function validator() 
	{
		return BrandValidator::class;
	}

	public function getListForDropDown() 
	{
		return $this->all()->pluck('brand_name', 'id');
	}
}
?>