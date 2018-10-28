<?php 

namespace App\Repositories;

use App\Repositories\Base\CustomRepository;
use App\Model\Entities\Employee;
use App\Validators\EmployeeValidator;

/**
 * 
 */
class EmployeeRepository extends CustomRepository
{
	function model() 
	{
		return Employee::class;
	}

	public function validator() 
	{
		return EmployeeValidator::class;
	}
}
?>