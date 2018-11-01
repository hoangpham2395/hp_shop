<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;
use App\Repositories\AdminRepository;
use App\Validators\AdminValidator;
use App\Model\Entities\Admin;
use Illuminate\Http\Request;

/**
 * 
 */
class DashboardController extends BackendController
{
	public function index() 
	{
		return view('backend.dashboard.index');
	}
}