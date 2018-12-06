<?php

namespace App\Repositories;

use App\Repositories\Base\CustomRepository;
use App\Model\Entities\ProductPrice;
use App\Validators\ProductPriceValidator;

/**
 *
 */
class ProductPriceRepository extends CustomRepository
{
    function model()
    {
        return ProductPrice::class;
    }

    public function validator()
    {
        return ProductPriceValidator::class;
    }
}