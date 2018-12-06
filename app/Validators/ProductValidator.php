<?php 
namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use App\Validators\Base\BaseValidator;

class ProductValidator extends BaseValidator {

    protected $rules = [
    	'product_name' => 'required',
//    	'quantity' => 'required|numeric|min:0',
    	'brand_id' => 'required',
    	'category_id' => 'required',
//    	'price' => 'required|numeric|min:1',
    	'model' => 'required',
//    	'origin' => 'required',
    	'made_in' => 'required',
//    	'warranty' => 'required'
    ];
}