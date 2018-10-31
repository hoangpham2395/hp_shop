<?php 
namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use App\Validators\Base\BaseValidator;

class BrandValidator extends BaseValidator {

    protected $rules = [
    	'brand_name' => 'required',
    	'brand_image' => 'nullable|mimes:jpeg,png,gif,jpg'
    ];
}