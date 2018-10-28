<?php 

namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Scopes\Base\BaseScope;

/**
 * 
 */
class Job extends Base
{
	protected $table = 'jobs';
	protected $primaryKey = 'id';
	protected $fillable = ['job_name', 'ins_id', 'upd_id', 'del_flag'];
	protected $_alias = 'jobs';

	// Add global scope
	protected static function boot() 
	{
		parent::boot();
		static::addGlobalScope(new BaseScope);
	}
}