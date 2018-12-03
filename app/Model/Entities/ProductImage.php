<?php 

namespace App\Model\Entities;

use App\Model\Base\Base;
use App\Model\Scopes\Base\BaseScope;
use App\Model\Presenters\ProductImagePresenter;

/**
 * 
 */
class ProductImage extends Base
{
	use ProductImagePresenter;

	protected $table = 'product_images';
	protected $primaryKey = 'id';
	protected $fillable = ['product_id', 'image', 'type', 'ins_id', 'upd_id', 'del_flag'];
	protected $_alias = 'products';

	// Add global scope
	protected static function boot() 
	{
		parent::boot();
		static::addGlobalScope(new BaseScope);
	}
}