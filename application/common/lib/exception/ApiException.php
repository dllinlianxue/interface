<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/29
 * Time: 上午9:43
 */
namespace app\common\lib\exception;

use think\Exception;
use Throwable;

//封装异常类:APIException类
class ApiException extends Exception {

    public $httpCode = 500;//定义属性

    public function __construct($message = "", $httpCode=500, $code = 0, Throwable $previous = null)
    {
        $this->httpCode = $httpCode;

        parent::__construct($message, $code, $previous);

    }

}