<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;
use App\Repositories\AdminRepository;
use App\Validators\AdminValidator;
use App\Model\Entities\Admin;
use Illuminate\Http\Request;
use App\Repositories\EmployeeRepository;

/**
 * 
 */
class AdminController extends BackendController
{
    protected $_employeeRepository;

    public function setEmployeeRepository($employeeRepository) 
    {
        $this->_employeeRepository = $employeeRepository;
    } 

    public function getEmployeeRepository() 
    {
        return $this->_employeeRepository;
    }

	public function __construct(AdminRepository $adminRepository, AdminValidator $adminValidator, Admin $admin, EmployeeRepository $employeeRepository) 
	{
		$this->setRepository($adminRepository);
		$this->setValidator($adminValidator);
		$this->setAlias($admin->getTable());
        $this->setEmployeeRepository($employeeRepository);
		parent::__construct();
	}

	protected function _prepareData()
    {
        $params['role_type'] = getConfig('role_type');
        // Get list employee
        $employees = $this->getEmployeeRepository()->getListForAdmin();
        $params['employees'] = $employees;

        $params = array_merge($params, parent::_prepareData());
        return $params;
    }
}

?>