<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/29
 * Time: 下午5:49
 */
namespace app\common\model;

use think\Model;

class Cat extends Model {
    public function getCat() {
        $data = [
            'status' => 1
        ];
        //field 只取表里id和cat_name的列
        return $this->where($data)->field(['id','cat_name'])->select();
    }
};