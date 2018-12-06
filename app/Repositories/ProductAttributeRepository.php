<?php

namespace App\Repositories;

use App\Repositories\Base\CustomRepository;
use App\Model\Entities\ProductAttribute;
use App\Validators\ProductAttributeValidator;

/**
 *
 */
class ProductAttributeRepository extends CustomRepository
{
    function model()
    {
        return ProductAttribute::class;
    }

    public function validator()
    {
        return ProductAttributeValidator::class;
    }

    public function getListForProduct() 
    {
    	$attrs = $this->all();

    	if (empty($attrs)) {
    		return [];
    	}

    	$groups = [];

    	foreach($attrs as $attr) {
    		$groups[] = $attr->group_id;
    	}

    	$result = [];

    	foreach($groups as $group) {
    		foreach ($attrs as $attr) {
    			if ($attr->group_id != $group) {
    				continue;
    			}
				$result[$group][$attr->id] = $attr->attr_name;
    		}
    	}
    	return $result;
    }
}