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

    public function getListByGroups($groups = []) 
    {
    	if (empty($groups)) {
    		return [];
    	}

    	$attrs = $this->all();

    	if (empty($attrs)) {
    		return [];
    	}

    	$result = [];

    	foreach($groups as $groupId => $group) {
    		foreach ($attrs as $attr) {
    			if ($attr->group_id != $groupId) {
    				continue;
    			}
				$result[$groupId][$attr->id] = $attr->attr_name;
    		}
    	}
    	return $result;
    }
}