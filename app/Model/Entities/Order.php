<?php 

namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Scopes\Base\BaseScope;

/**
 * 
 */
class Order extends Base
{
	protected $table = 'orders';
	protected $primaryKey = 'id';
	protected $fillable = ['username', 'sex', 'tel', 'address', 'status', 'ins_id', 'upd_id', 'del_flag'];
	protected $_alias = 'orders';

	// Add global scope
	protected static function boot() 
	{
		parent::boot();
		static::addGlobalScope(new BaseScope);
	}
}