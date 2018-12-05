<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;
use App\Repositories\ProductAttributeRepository;
use App\Validators\ProductAttributeValidator;
use App\Model\Entities\ProductAttribute;
use Illuminate\Http\Request;
use App\Repositories\ProductGroupRepository;

/**
 *
 */
class ProductAttributeController extends BackendController
{
    protected $_productGroupRepository;

    public function setProductGroupRepository($productGroupRepository)
    {
        $this->_productGroupRepository = $productGroupRepository;
    }

    public function getProductGroupRepository()
    {
        return $this->_productGroupRepository;
    }

    public function __construct(ProductAttributeRepository $productAttributeRepository,
                                ProductAttributeValidator $productAttributeValidator,
                                ProductAttribute $productAttribute,
                                ProductGroupRepository $productGroupRepository)
    {
        $this->setRepository($productAttributeRepository);
        $this->setValidator($productAttributeValidator);
        $this->setAlias($productAttribute->getTable());
        $this->setProductGroupRepository($productGroupRepository);
        parent::__construct();
    }

    protected function _prepareData()
    {
        $params['groups'] = $this->getProductGroupRepository()->getListForSelect('id', 'group');
        $params['type'] = getConfig('attr_type');
        $params = array_merge($params, parent::_prepareData());
        return $params;
    }
}