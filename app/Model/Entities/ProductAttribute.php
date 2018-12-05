<?php 

namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Scopes\Base\BaseScope;
use  App\Model\Presenters\ProductAttributePresenter;

/**
 * 
 */
class ProductAttribute extends Base
{
    use ProductAttributePresenter;

	protected $table = 'product_attr';
	protected $primaryKey = 'id';
	protected $fillable = ['attr_name', 'group_id', 'type', 'length', 'is_null', 'ins_id', 'upd_id', 'del_flag'];
	protected $_alias = 'product_attr';

	// Add global scope
	protected static function boot() 
	{
		parent::boot();
		static::addGlobalScope(new BaseScope);
	}

	public function group()
    {
        return $this->belongsTo('\App\Model\Entities\ProductGroup');
    }
}