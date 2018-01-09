<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/29
 * Time: 下午5:49
 */
namespace app\api\controller\v1;

use app\api\controller\Common;
use app\common\lib\exception\ApiException;

class Cat extends Common {

    public function index() {
        //获取数据库里的信息
        $cats = model('Cat')->getCat();

        //判断是否获取到了
        if (!$cats) {
            throw new ApiException('未获取到信息',404);
        }
        //返回json数据
        return show(0,'ok',$cats,200);
    }
}