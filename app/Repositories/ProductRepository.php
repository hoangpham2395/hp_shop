<?php 

namespace App\Repositories;

use App\Repositories\Base\CustomRepository;
use App\Model\Entities\Product;
use App\Validators\ProductValidator;

/**
 * 
 */
class ProductRepository extends CustomRepository
{
	function model() 
	{
		return Product::class;
	}

	public function validator() 
	{
		return ProductValidator::class;
	}

	public function getListForBackend($params = [])
	{
		// Serve pagination
		if (isset($params['page'])) {
			unset($params['page']);
		}

        // Get data
		return $this->scopeQuery(function ($query) use (&$params) {
			$query = $query->orderBy($this->getSortField(), $this->getSortType());
			if (empty($params)) {
				return $query;
			}
			// Search
			if (isset($params['price_min'])) {
				$query = $query->where('price', '>=', $params['price_min']);
			}

			if (isset($params['price_max'])) {
				$query = $query->where('price', '<=', $params['price_max']);
			}

			if (isset($params['product_name'])) {
				$query = $query->where('product_name', 'LIKE', '%' . $params['product_name'] . '%');
			}
			return $query;
		})
		->paginate($this->getPerPage());
	}
}
?>