<?php

namespace App\Model\Presenters;

trait EmployeePresenter 
{
	public function getUrlImage()
    {
        return (!$this->avatar || !file_exists(public_path($this->avatar))) ? getNoImage() : asset($this->avatar);
    }

    public function getImage() 
	{
		return '<img src="' . $this->getUrlImage() . '" height="100">';
	}
}