<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/29
 * Time: 上午9:08
 */
namespace app\api\controller;

use think\Controller;

class Friends extends Common {
    //获取好友列表
    public function index() {
        $friends = [
          [
              'id' => 1,
              'name' => 'lisi',
              'age' => 19
          ],
            [
                'id' => 2,
                'name' => 'uu',
                'age' => 18
            ],
            [
                'id' => 3,
                'name' => 'aa',
                'age' => 19
            ],
            [
                'id' => 4,
                'name' => 'ee',
                'age' => 20
            ]
        ];
        $this->test();
        return show(0,'ok',$friends);
    }


    //测试
    public function test() {
        return show(-1,'请求参数失败',[]);
    }
    //新建一个好友
    public function save() {
        $post = input('post.');
        return show(0,'ok',$post);
    }
    //更新一个好友信息
    public function update($id) {
        $put = input('put.');
        $put['id'] = $id;
        return show(0,'ok',$put);
    }
    //删除一个好友
    public function delete($id) {
        $delete = input('delete.');
        $delete['id'] = $id;
        return show(-1,'删除失败',$id);
    }
    //获取一个好友信息
    public function read($id) {
        return show(0,'ok',$id);

    }
}