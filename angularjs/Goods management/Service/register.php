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
require_once 'Db.php';
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/1
 * Time: 8:44
 */
$type = $_REQUEST['type'];
function initArea()
{
    $connect = Db::getInstance()->connect();
    $result = mysql_query("select * from country",$connect);
    $areas = array();
    while ($row = mysql_fetch_assoc($result))
    {
        array_push($areas,$row);
    }
    Response::json('10000','地区获取成功',$areas);
}
if ($type == 'init'){
    initArea();
}else{
    dbRegister();
}

function dbRegister(){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $area = $_REQUEST['area'];

    $connect = Db::getInstance() ->connect();
    $result = mysql_query("select * from user where username ='{$username}'",$connect);
    if (mysql_num_rows($result) != 0) {
        Response::json('-10001', '用户已存在，请重新注册');
    } else {
        $result = mysql_query("insert into user(username,password,email,area)
                            values ('$username','$password','$email','$area')", $connect);
        if ($result) {
            $output = array('id' => mysql_insert_id(), 'username' => $username, 'password' => $password, 'email' => $email, 'area' => $area);
            Response::json('10000', '注册成功');
        }
    }

}
