<?php 

namespace App\Model\Entities;

use App\Model\Presenters\AdminPresenter;
use Illuminate\Notifications\Notifiable;
use App\Model\Scopes\Base\BaseScope;
use Illuminate\Support\Facades\Hash;
use App\Model\Base\BaseAuth;

/**
 * 
 */
class Admin extends BaseAuth
{
	use Notifiable;
	use AdminPresenter;

	protected $table = 'admin';
	protected $primaryKey = 'id';
	protected $fillable = ['email', 'password', 'employee_id', 'role_type', 'ins_id', 'upd_id', 'del_flag'];
	protected $_alias = 'admin';

	// Add global scope
	protected static function boot() 
	{
		parent::boot();
		static::addGlobalScope(new BaseScope);
	}

	public function setPasswordAttribute($value) 
	{
		$this->attributes['password'] = Hash::make($value);
	}

	public function employee()
    {
        return $this->hasOne('App\Model\Entities\Employee', 'id', 'employee_id');
    }
}
?>