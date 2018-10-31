<?php 

namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Scopes\Base\BaseScope;
use App\Model\Presenters\BrandPresenter;

/**
 * 
 */
class Brand extends Base
{
	use BrandPresenter;

	protected $table = 'brands';
	protected $primaryKey = 'id';
	protected $fillable = ['brand_name', 'brand_image', 'ins_id', 'upd_id', 'del_flag'];
	protected $_alias = 'brands';

	// Add global scope
	protected static function boot() 
	{
		parent::boot();
		static::addGlobalScope(new BaseScope);
	}
}