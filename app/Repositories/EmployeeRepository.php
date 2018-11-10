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

	public function getListForAdmin() 
	{
		$employees = $this->all();
		$result = [];

		if (empty($employees)) {
			return $result;
		}

		foreach($employees as $employee) {
			$job = (!empty($employee->job)) ? ' - ' . $employee->job->job_name : '';
			$result[$employee->id] = $employee->id . '. ' . $employee->name . ' - ' . $employee->email . $job;
		}
		return $result;
	}
}
?>