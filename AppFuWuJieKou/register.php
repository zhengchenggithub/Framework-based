<?php
header("Content-type: text/html; charset=utf-8");
$sid = file_get_contents("register.txt");
if ($sid == null)
{
    session_start();
    $sid = session_id();
    file_get_contents("register.txt",$sid);
}else{
    session_id($sid);
    session_start();
}
require_once 'json.php';
require_once 'dbhelper.php';
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/10/29
 * Time: 15:36
 */
//1.验证码的正确性
//获取传值
$username = $_REQUEST['username'];
$verifyCode = $_REQUEST['VerifyCode'];
$password = $_REQUEST['pwd'];

//服务器端的验证码是保存到哪去了呢

$allVerifyCode = array();
if ($_SESSION['VerifyCode'] != null)
{
    $allVerifyCode = $_SESSION['VerifyCode']; //从session获取验证码的数组
}

$cnt = count($allVerifyCode);
$flag = 0;//用于判断验证码是否正确
for ($i = 0; $i < $cnt; $i++)
{
    $p = $allVerifyCode[$i]['telephone'];
    $v = $allVerifyCode[$i]['VerifyCode'];
    $t = $allVerifyCode[$i]['time'];
    if ($p == $username && $v == $verifyCode)//用于check验证码的正确性
    {
        $flag = 1;//验证码正确
        if($t + 3*60 < time())//检测验证码是否过期
        {
            $flag = 2;//验证码过期
        }
        break;
    }
}
if ($flag == 0 )
{
    Response::json('-1004','验证码错误');
}else if ($flag == 2)
{
    Response::json('-1005','验证码过期,请从新获取');
}else
{
    //Response::json('10005','验证码正确');
    //对用户进行check，注册用户
    $connect = Db::getInstance() ->connect();
    //验证用户是否存在
    $result = mysql_query("select userid,telephone,password,nickname from account where telephone=".$username,$connect);
    if (mysql_num_rows($result) != 0)
    {
        Response::json('-1006','用户已经存在,请从新输入用户名');
    }else{
        //用户不存在
        //1.对密码加密
        $password = md5($password);
        //2.生成昵称
        $nickname = '0.0'.$username.'0.0';
        //生成token
        $token = substr(md5(time()),0,16);
        //插入数据库中
        $result = mysql_query("insert into account(telephone,password,nickname,token) values
            ('$username','$password','$nickname','$token')",$connect);
        if ($result)
        {
            $output = array('userid' => mysql_insert_id(),'telephone' => $username,'nickname' => $nickname,'token' => $token);
            Response::json('10001','注册成功');
        }
    }

}

