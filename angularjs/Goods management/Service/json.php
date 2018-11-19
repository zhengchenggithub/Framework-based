<?php
header("Content-type: text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/10/29
 * Time: 9:12
 */
// 1.生成一个类用于格式化json
class Response{
    public static function json($code =  '',$message = '',$data = array())//生成，json_encode编码
    {
        $result = array
        (
            "code" => $code,
            "message" => $message,
            "content" => $data
        );
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
    }
}