<?php
header("Content-Type: text/html; charset=UTF-8");
error_reporting(E_ALL^E_NOTICE);
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
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/10/29
 * Time: 10:23
 */
//接受请求
$username = $_REQUEST['username'];
//生成验证码
$str = "0123456789";
$code = null;
$flag = 0;
for ($i = 0 ; $i < 6 ; $i++)
{
    $code.= $str[mt_rand(0, strlen($str) - 1)];//随机获取一个数0-9
}
if ($code)//验证码正常获取
{
    //json格式
    $userArray = array('username' => $username,'VerifyCode' => $code, 'time' => time());//time：记录当前验证码生成的时间
    //服务器需要保存各个用户取的验证码
    $allverifyCode = array();//保存用户的验证码
//    var_dump($_SESSION);
    if ($_SESSION["VerifyCode"] != null)
    {
        $allverifyCode = $_SESSION["VerifyCode"];
    }
    $cnt = count($allverifyCode);
    for ($i = 0;$i < $cnt; $i++)
    {
        $p = $allverifyCode[$i]['username'];
        if ($p == $username)
        {
            $allverifyCode[$i]['VerifyCode'] = $code;
            $allverifyCode[$i]['time'] = time();//更新时间
            $flag =1;
            break;
        }
    }
    if ($flag == 0)
    {
        array_push($allverifyCode,$userArray);
    }
    $_SESSION['VerifyCode'] = $allverifyCode;

    alter(Response::json('10001','验证码发送成功',$userArray));
}else {//验证码无法获取
    alter(Response::json('10001','验证码获取失败'));
}

//
