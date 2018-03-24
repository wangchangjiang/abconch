<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/24 0024
 * Time: 下午 4:16
 */

namespace Abconch\Lib;

class Tools
{
    public function __construct()
    {

    }
    public static function Hello(){
        echo 'Hello world';

    }
    /**
     * 验证手机号
     * @param $phone
     * @return bool
     */
    public static function checkPhone($phone){
        if(empty($phone)){
            return false;
        }
        if(strlen($phone)!=11){
            return false;
        }
        $reg = "/^1[34578]{1}\d{9}$/";
        if (preg_match($reg, $phone)) {
            return true;
        } else {
            return false;
        }
    }
}