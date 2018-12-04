<?php 

namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Scopes\Base\BaseScope;

/**
 * 
 */
class ProductGroup extends Base
{
	protected $table = 'product_group';
	protected $primaryKey = 'id';
	protected $fillable = ['group', 'ins_id', 'upd_id', 'del_flag'];
	protected $_alias = 'product_group';

	// Add global scope
	protected static function boot() 
	{
		parent::boot();
		static::addGlobalScope(new BaseScope);
	}

	public function setGroupAttribute($value) 
	{
		$this->attributes['group'] = strtoupper($value);
	}
}