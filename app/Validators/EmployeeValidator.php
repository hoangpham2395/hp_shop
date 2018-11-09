<?php 
namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use App\Validators\Base\BaseValidator;

class EmployeeValidator extends BaseValidator {

    protected $rules = [
    ValidatorInterface::RULE_CREATE => [
            'name' => 'required',
            'email' => 'required|email|unique:admin,email',
            'tel' => 'required',
            'birthday' => 'required',
            'avatar' => 'nullable|mimes:jpeg,png,gif,jpg',
            'address' => 'required',
            'job_id' => 'required',
            'id_number' => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required',
            'email'  => 'required|email|unique:admin,email, :id',
            'tel' => 'required',
            'birthday' => 'required',
            'avatar' => 'nullable|mimes:jpeg,png,gif,jpg',
            'address' => 'required',
            'job_id' => 'required',
            'id_number' => 'required'
        ]
    ];
}