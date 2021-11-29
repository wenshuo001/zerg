<?php


namespace app\api\model;


use think\Db;
use think\Exception;
use think\Model;

class Banner extends Model
{

    /**
     * @param $id int banner所在位置
     * @return Banner
     */
    public static function getBannerById($id)
    {
      // $result = Db::query('select * from banner_item where banner_id=?',[$id]);
         $result = Db::table('banner_item')->where('banner_id','=',$id)->select();

        return $result;
    }

    /**
     * @param $id int banner所在位置
     * @return Banner
     */
    public function getItems()
    {
        $result = $this->hasMany('BannerItem','banner_id','id');
        return $result;
    }
}