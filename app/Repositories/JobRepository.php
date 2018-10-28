<?php 

namespace App\Repositories;

use App\Repositories\Base\CustomRepository;
use App\Model\Entities\Job;
use App\Validators\JobValidator;

/**
 * 
 */
class JobRepository extends CustomRepository
{
	function model() 
	{
		return Job::class;
	}

	public function validator() 
	{
		return JobValidator::class;
	}
}
?>