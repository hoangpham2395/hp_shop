<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;
use App\Repositories\JobRepository;
use App\Validators\JobValidator;
use App\Model\Entities\Job;
use Illuminate\Http\Request;

/**
 * 
 */
class JobsController extends BackendController
{
	public function __construct(JobRepository $jobRepository, JobValidator $jobValidator, Job $job) 
	{
		$this->setRepository($jobRepository);
		$this->setValidator($jobValidator);
		$this->setAlias($job->getTable());
		parent::__construct();
	}

}