<?php 

namespace App\Repositories;

use App\Repositories\Base\CustomRepository;
use App\Model\Entities\Order;
use App\Validators\OrderValidator;

/**
 * 
 */
class OrderRepository extends CustomRepository
{
	function model() 
	{
		return Order::class;
	}

	public function validator() 
	{
		return OrderValidator::class;
	}
}
?>