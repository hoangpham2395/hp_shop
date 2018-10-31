<?php 

namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Scopes\Base\BaseScope;
use App\Model\Presenters\CategoryPresenter;

/**
 * 
 */
class Category extends Base
{
	use CategoryPresenter;

	protected $table = 'categories';
	protected $primaryKey = 'id';
	protected $fillable = ['category_name', 'category_image', 'parent_id','ins_id', 'upd_id', 'del_flag'];
	protected $_alias = 'categories';

	// Add global scope
	protected static function boot() 
	{
		parent::boot();
		static::addGlobalScope(new BaseScope);
	}

	public function category() 
	{
		return $this->hasOne(Category::class, 'parent_id', 'id');
	}
}