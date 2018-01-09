<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/12/4
 * Time: 下午8:40
 */
namespace app\api\controller\v1;

use app\api\controller\Common;
use app\common\lib\exception\ApiException;

class SendSign extends Common {
    public function save() {
        //获取请求参数手机号
        $phone = input('post.phone');

        if (!$phone) {
            throw new ApiException('未获取到手机号',400,3008);
        }

        \app\common\lib\SendSign::signName($phone);
    }
}