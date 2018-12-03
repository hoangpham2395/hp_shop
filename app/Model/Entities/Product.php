<?php 

namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Scopes\Base\BaseScope;
use App\Model\Presenters\ProductPresenter;

/**
 * 
 */
class Product extends Base
{
	use ProductPresenter;

	protected $table = 'products';
	protected $primaryKey = 'id';
	protected $fillable = ['product_name', 'quantity', 'brand_id', 'category_id', 'price', 'sale', 'weigh', 'color', 'size', 'type_screen', 'size_screen', 'color_screen', 'resolution_screen', 'battery', 'type_battery', 'os', 'before_camera', 'after_camera', 'memory_stick', 'chipset', 'gpu', 'model', 'made_in', 'ram', 'internal_memory', 'design', 'material', 'speed_cpu', 'jack_phone', 'film', 'sensor', 'warranty', 'number_sim', 'type_sim', 'function_camera', 'connect', 'origin', 'special', 'description', 'ins_id', 'upd_id', 'del_flag'];
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

	public function images() 
	{
		return $this->hasMany('App\Model\Entities\ProductImage', 'product_id', 'id');
	}
}