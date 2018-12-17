<?php 

namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Scopes\Base\BaseScope;

/**
 * 
 */
class ProductPrice extends Base
{
	protected $table = 'product_price';
	protected $primaryKey = 'id';
	protected $fillable = ['product_id', 'color', 'price', 'sale', 'quantity', 'origin', 'warranty', 'image', 'ins_id', 'upd_id', 'del_flag'];
	protected $_alias = 'product_price';

	// Add global scope
	protected static function boot() 
	{
		parent::boot();
		static::addGlobalScope(new BaseScope);
	}
}