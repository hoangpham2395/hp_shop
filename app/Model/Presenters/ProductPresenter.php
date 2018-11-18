<?php 

namespace App\Model\Presenters;

trait ProductPresenter 
{
	public function getPrice() 
	{
		return number_format($this->price, 0, ',', '.') . ' VND';
	}
}