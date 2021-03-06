<?php


namespace app\api\validate;

class IDMustBePostiveint extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    protected function isPositiveInteger($value,$rule = '',
    $data = '', $field = ''){
        if (is_numeric($value) && is_int($value+0) && ($value+0)>0){
            return true;
        }else{
            return false;
        }
    }
}