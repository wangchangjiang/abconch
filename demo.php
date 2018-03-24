<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/24 0024
 * Time: 下午 10:57
 */
require_once './vendor/autoload.php';
use Abconch\Lib\Tools;
$phone = '12345678901';
if(Tools::checkPhone($phone)){
    echo 'ok';
}else{
    echo 'no';
}