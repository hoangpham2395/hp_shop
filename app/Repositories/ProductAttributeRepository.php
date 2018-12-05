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
}