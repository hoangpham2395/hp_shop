<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;
use App\Repositories\EmployeeRepository;
use App\Validators\EmployeeValidator;
use App\Model\Entities\Employee;
use Illuminate\Http\Request;

/**
 * 
 */
class EmployeesController extends BackendController
{
	public function __construct(EmployeeRepository $employeeRepository, EmployeeValidator $employeeValidator, Employee $employee) 
	{
		parent::__construct();
		$this->setRepository($employeeRepository);
		$this->setValidator($employeeValidator);
		$this->setAlias($employee->getTable());
	}
}