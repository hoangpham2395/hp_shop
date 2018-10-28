<?php 

namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Scopes\Base\BaseScope;

/**
 * 
 */
class Employee extends Base
{
	protected $table = 'employees';
	protected $primaryKey = 'id';
	protected $fillable = ['name', 'email', 'tel', 'avatar', 'address', 'id_number', 'bank_account', 'description', 'ins_id', 'upd_id', 'del_flag'];
	protected $_alias = 'employees';

	// Add global scope
	protected static function boot() 
	{
		parent::boot();
		static::addGlobalScope(new BaseScope);
	}
}