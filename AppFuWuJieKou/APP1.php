<?php
//header("Content-type: text/html; charset=utf-8");
require_once 'json.php';
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/10/29
 * Time: 9:01
 */
$student = array("name" => "郑诚","age" => 20,"height" => 1.80);

//第一种方法
//$jsonArray = array("code" =>1000 , "message" => "成功" , "content" =>$student );
//$student1 = json_encode($jsonArray,JSON_UNESCAPED_UNICODE);
//echo $student1;

//第二种方法

Response::json('1000','ok',$student);