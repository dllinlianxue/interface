<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/12/4
 * Time: 下午8:26
 */
namespace app\common\lib;

use aliyun\api_demo\SmsDemo;

class SendSign {
    public static function signName($phone) {
        //        set_time_limit(0);
        header('Content-Type: text/plain; charset=utf-8');
        $code = rand(1000,9999);

        $response = SmsDemo::sendSms(
            "双木成林", // 短信签名
            "SMS_115385607", // 短信模板编号
            $phone, // 短信接收者
            Array(  // 短信模板中字段的值
                "code"=> $code,
            )
        );
//        echo "发送短信(sendSms)接口返回的结果:\n";
        print_r($response);
    }
}