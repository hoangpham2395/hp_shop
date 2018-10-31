<?php 

namespace App\Model\Presenters;

trait BrandPresenter 
{
	public function getUrlImage()
    {
        return (!$this->brand_image || !file_exists(public_path($this->brand_image))) ? getNoImage() : asset($this->brand_image);
    }

    public function getImage() 
	{
		return '<img src="' . $this->getUrlImage() . '" height="100">';
	}
}