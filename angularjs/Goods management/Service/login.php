<?php
header("Content-type: text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/10/31
 * Time: 17:02
 */
require_once 'Db.php';
require_once 'json.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];


$connect = Db::getInstance() ->connect();
$result = mysql_query("select * from user where username ='{$username}'",$connect);
if (mysql_num_rows($result) == 0)
{
    Response::json('-10001','用户不存在');
}else{
    $arr = mysql_fetch_array($result);
    if ($arr['username'] == $username && $arr['password'] == $password)
    {
        Response::json('10001','登陆成功');
    }else{
        Response::json('-10001','密码出错');


    }
}