<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/29
 * Time: 上午11:07
 */
namespace app\api\controller;

use think\Controller;

class Time extends Controller {
    public function index() {
        //返回时间戳的数据
        return show(0,'ok',['time'=>time()]);
    }
}