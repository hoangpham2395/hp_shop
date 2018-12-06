<?php

namespace App\Repositories;

use App\Repositories\Base\CustomRepository;
use App\Model\Entities\ProductValue;
use App\Validators\ProductValueValidator;

/**
 *
 */
class ProductValueRepository extends CustomRepository
{
    function model()
    {
        return ProductValue::class;
    }

    public function validator()
    {
        return ProductValueValidator::class;
    }
}