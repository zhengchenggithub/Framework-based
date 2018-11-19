<?php
require_once 'json.php';
require_once 'dbhelper.php';
header("Content-type: text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/10/29
 * Time: 14:59
 */
//从APP端取值
$username = $_REQUEST['username'];
$password =$_REQUEST['pwd'];
$password = md5($password);

//判断同户名和密码是否正确
$connect = Db::getInstance() -> connect();
$result = mysql_query("select userid,telephone,password,nickname from account where telephone =".$username,$connect);
if (mysql_num_rows($result) == 0)
{
    Response::json('404','用户不存在');
}else{
    $arr = mysql_fetch_array($result);
    if ($arr['telephone'] == $username && $arr['password'] == $password)
    {
        Response::json('10001','登陆成功');
    }else{
        Response::json('-10001','密码出错');
        //对用户进行CHECK，注册用户

    }
}