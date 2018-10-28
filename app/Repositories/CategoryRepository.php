<?php 

namespace App\Repositories;

use App\Repositories\Base\CustomRepository;
use App\Model\Entities\Category;
use App\Validators\CategoryValidator;

/**
 * 
 */
class CategoryRepository extends CustomRepository
{
	function model() 
	{
		return Category::class;
	}

	public function validator() 
	{
		return CategoryValidator::class;
	}
}
?>