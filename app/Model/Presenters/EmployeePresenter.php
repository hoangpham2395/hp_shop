<?php

namespace App\Model\Presenters;

trait EmployeePresenter 
{
	public function getUrlAvatar()
    {
        return (!$this->avatar || !file_exists(public_path($this->avatar))) ? getNoImage() : asset($this->avatar);
    }

    public function getAvatar() 
	{
		return '<img src="' . $this->getUrlAvatar() . '" height="100">';
	}
}