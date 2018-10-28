<?php 

namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Scopes\Base\BaseScope;
use App\Model\Presenters\EmployeePresenter;

/**
 * 
 */
class Employee extends Base
{
	use EmployeePresenter;

	protected $table = 'employees';
	protected $primaryKey = 'id';
	protected $fillable = ['name', 'email', 'tel', 'birthday', 'avatar', 'address', 'id_number', 'bank_account', 'description', 'ins_id', 'upd_id', 'del_flag'];
	protected $_alias = 'employees';

	// Add global scope
	protected static function boot() 
	{
		parent::boot();
		static::addGlobalScope(new BaseScope);
	}

	public function setBirthDayAttribute($value) 
	{
		$this->attributes['birthday'] = date('Y-m-d', strtotime($value));
	}

	public function getBirthDayAttribute() 
	{
		return date('d/m/Y', strtotime($this->attributes['birthday']));
	}
}