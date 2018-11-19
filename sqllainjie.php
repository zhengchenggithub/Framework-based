<?php
header("Content-type: text/html; charset=utf-8");
$db = array(
    'dsn' => 'mysqli:host=localhost;dbname=test',
    'host' => 'localhost',
    'port' => '3306',
    'dbname' => 'test',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
);

//mysqli过程化风格

//建立连接:相比mysql_connect可以直接选择dbname、port
//$link = mysqli_connect($db['host'], $db['username'], $db['password'], $db['dbname'], $db['port']);
$link = mysqli_connect($db['host'], $db['username'], $db['password']) or die( 'Could not connect: '  .  mysqli_error ($link));

//选择数据库
mysqli_select_db($link, $db['dbname']) or die ( 'Can\'t use foo : '  .  mysqli_error ($link));

mysqli_set_charset($link, $db['charset']);


//数据库查询

//普通查询，返回资源
$result  = mysqli_query($link, 'select * from tb_emp');

//取得结果集中行的数目
$num_rows  =  mysqli_num_rows ( $result );


//新增：
/*
$insert_sql = sprintf("insert into user(name,gender,age) values('%s', '%d', '%d')", 'test', 1, 22);
mysqli_query($link, $insert_sql) or die(mysqli_error($link));

echo $affected_rows = mysqli_affected_rows($link);
echo $id = mysqli_insert_id($link);

*/

//更新
/*
mysqli_query($link, sprintf("update user set name = '%s' where id = %d", 'test2', 12));

echo $affected_rows = mysqli_affected_rows($link);
*/

//删除
/*
mysqli_query($link, sprintf("delete from user where id = %d", 12));

echo $affected_rows = mysqli_affected_rows($link);
*/

//遍历结果集
while ($row = mysqli_fetch_assoc($result)){
    echo '<pre>';
    print_r($row);
}

//关闭数据库
//mysqli_close($link);
