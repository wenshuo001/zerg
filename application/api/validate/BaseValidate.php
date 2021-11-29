<?php


namespace app\api\validate;


use app\lib\exception\BaseException;
use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

/**
 * Class BaseValidate
 * @package app\api\validate 验证类的基类
 */
class BaseValidate extends Validate
{

    public function goCheck()
    {
        //必须设置contetn-type:application/json

//        $params = (new Request())->param();
        $params = input('param.');

        if (!$this->check($params)) {
            $error = $this->error;
            return  new Exception($error);
        }
        return true;
    }


}