<?php 

namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Scopes\Base\BaseScope;

/**
 * 
 */
class Product extends Base
{
	protected $table = 'products';
	protected $primaryKey = 'id';
	protected $fillable = ['product_name', 'brand_id', 'category_id', 'price', 'sale', 'ins_id', 'upd_id', 'del_flag'];
	protected $_alias = 'products';

	// Add global scope
	protected static function boot() 
	{
		parent::boot();
		static::addGlobalScope(new BaseScope);
	}

	public function brand() 
	{
		return $this->hasOne('App\Model\Entities\Brand', 'id', 'brand_id');
	}

	public function category() 
	{
		return $this->hasOne('App\Model\Entities\Category', 'id', 'category_id');
	}
}