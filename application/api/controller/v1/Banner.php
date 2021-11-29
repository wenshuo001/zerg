<?php


namespace app\api\controller\v1;


use think\Exception;
use think\Request;
use app\api\validate\IDMustBePostiveint;
use think\Validate;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
class Banner
{

    /**
     * 获取指定id的banner信息
     * Get 请求
     * @param $id
     */
    public function getBanner($id){
        //验证请求最长字段
        (new IDMustBePostiveint())->goCheck();
        $banner = BannerModel::with('getItems')->find($id);

//        $banner = BannerModel::getBannerById($id);
        if(empty($banner)){
            throw new BannerMissException();
        }

//        try {
//            $banner = BannerModel::getBannerById($id);
//        }catch (Exception $ex){
//            $err = [
//                'error_code' => 10001,
//                'msg' => $ex->getMessage()
//            ];
//            return ;
//        }
        return json($banner);
    }
}
