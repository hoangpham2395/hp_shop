<?php 

namespace App\Model\Presenters;

trait ProductImagePresenter 
{
	public function getUrlImage()
    {
        return (!$this->image || !file_exists(public_path($this->image))) ? getNoImage() : asset($this->image);
    }

    public function getImage() 
	{
		return '<img src="' . $this->getUrlImage() . '" height="100">';
	}
}
?>