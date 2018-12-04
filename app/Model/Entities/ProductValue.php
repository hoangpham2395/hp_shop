<?php 

namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Scopes\Base\BaseScope;

/**
 * 
 */
class ProductValue extends Base
{
	protected $table = 'product_value';
	protected $primaryKey = 'id';
	protected $fillable = ['attr_id', 'product_id', 'value', 'ins_id', 'upd_id', 'del_flag'];
	protected $_alias = 'product_value';

	// Add global scope
	protected static function boot() 
	{
		parent::boot();
		static::addGlobalScope(new BaseScope);
	}
}