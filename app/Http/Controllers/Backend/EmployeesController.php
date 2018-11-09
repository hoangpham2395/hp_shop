<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;
use App\Repositories\EmployeeRepository;
use App\Validators\EmployeeValidator;
use App\Model\Entities\Employee;
use Illuminate\Http\Request;
use App\Repositories\JobRepository;

/**
 * 
 */
class EmployeesController extends BackendController
{
	protected $_jobRepository;

	public function getJobRepository() 
	{
		return $this->_jobRepository;
	}

	public function setJobRepository($jobRepository) 
	{
		$this->_jobRepository = $jobRepository;
	}

	public function __construct(EmployeeRepository $employeeRepository, EmployeeValidator $employeeValidator, Employee $employee, JobRepository $jobRepository) 
	{
		parent::__construct();
		$this->setRepository($employeeRepository);
		$this->setValidator($employeeValidator);
		$this->setAlias($employee->getTable());
		$this->setJobRepository($jobRepository);
	}

	protected function _prepareData() 
	{
		$jobs = $this->getJobRepository()->getListForEmployees();
		$params['jobs'] = $jobs;
		$params = array_merge($params, parent::_prepareData());
		return $params;
	}
}