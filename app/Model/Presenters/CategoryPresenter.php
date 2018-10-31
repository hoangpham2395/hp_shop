<?php 

namespace App\Model\Presenters;

trait CategoryPresenter 
{
	public function getUrlImage()
    {
        return (!$this->category_image || !file_exists(public_path($this->category_image))) ? getNoImage() : asset($this->category_image);
    }

    public function getImage() 
	{
		return '<img src="' . $this->getUrlImage() . '" height="100">';
	}

	public function getParent() 
	{
		return $this->category;
	}

	public function getParentName() 
	{
		$parentCategory = $this->getParent();
		return empty($parentCategory) ? '' : $parentCategory->category_name; 
	}
}