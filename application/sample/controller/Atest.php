<?php


namespace app\sample\controller;


use think\Request;

class Atest
{
    //请求地址 http://localhost/zerg/public/index.php/sample/Atest/hello
    // 简化 http://w.cn/sample/Atest/hello
    public function hello(){
        //获取全部参数    第一种
//        $param = input('param.');
//        print_r($param);exit;
        //获取单个参数  在点后面加参数名
        $param = input('param.age');
        print_r($param);exit;

        //获取固定参数
//        $id = Request::instance()->param('id');
//        $name = Request::instance()->param('name');
//        $age = Request::instance()->param('age');


//
//        echo $id;
//        echo "|";
//        echo $name;
//        echo "|";
//        echo $age;
//        echo "|";
    }
}
