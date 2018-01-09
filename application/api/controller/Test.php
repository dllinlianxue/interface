<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/12/4
 * Time: 下午8:06
 */
namespace app\api\controller;

use aliyun\api_demo\SmsDemo;
use app\common\lib\SendSign;
use think\Controller;

class Test extends Controller {
    public function sendSign() {
////        set_time_limit(0);
//header('Content-Type: text/plain; charset=utf-8');
//
//$response = SmsDemo::sendSms(
//    "源文科技", // 短信签名
//    "SMS_109405011", // 短信模板编号
//    "13050548600", // 短信接收者
//    Array(  // 短信模板中字段的值
//        "code"=>"12345",
//        "product"=>"dsd"
//    ),
//    "123"   // 流水号,选填
//);
//echo "发送短信(sendSms)接口返回的结果:\n";
//print_r($response);

        SendSign::signName('15694272009');
    }

}

