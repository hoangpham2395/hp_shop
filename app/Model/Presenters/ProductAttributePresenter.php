<?php

namespace App\Model\Presenters;

trait ProductAttributePresenter
{
    public function getTextIsNull()
    {
        return array_get(getConfig('attr_is_null'), $this->is_null);
    }
}