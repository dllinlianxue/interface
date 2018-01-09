<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


use think\Route;

Route::get('friends$','api/friends/index');
//共用get方法 加$阻止访问friends/:id的时候 访问friends

Route::get('friends/:id','api/friends/read');

Route::post('friends','api/friends/save');

Route::put('friends/:id','api/friends/update');

Route::delete('friends/:id','api/friends/delete');

Route::get('time','api/time/index');

Route::get('v1/cat','api/v1.cat/index');

Route::post('v1/sendsign','api/v1.sendsign/save');