<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;
use App\Repositories\CategoryRepository;
use App\Validators\CategoryValidator;
use App\Model\Entities\Category;
use Illuminate\Http\Request;

/**
 * 
 */
class CategoriesController extends BackendController
{
	public function __construct(CategoryRepository $categoryRepository, CategoryValidator $categoryValidator, Category $category) 
	{
		$this->setRepository($categoryRepository);
		$this->setValidator($categoryValidator);
		$this->setAlias($category->getTable());
		parent::__construct();
	}

	protected function _prepareData() 
	{
		$params = [];
		$listCategory = $this->getRepository()->getListForBackend([]);
		$params['parent_category'] = (empty($listCategory)) ? null : $listCategory->pluck('category_name', 'id');
		$params = array_merge($params, parent::_prepareData());
		return $params;
	}
}