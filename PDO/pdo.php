<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/14
 * Time: 9:25
 */
header("Content-type: text/html; charset=utf-8");
//1、配置参数
$db = array(
    'dsn' => 'mysql:host=localhost;dbname=test;port=3306;charset=utf8',
    'username' => 'root',
    'password' => '',
);

//连接选项
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //默认是PDO::ERRMODE_SILENT, 0, (忽略错误模式)
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // 默认是PDO::FETCH_BOTH, 4
);

//2.连接数据库
try{
    $pdo = new PDO($db['dsn'], $db['username'], $db['password'], $options);
}catch(PDOException $e){
    die('数据库连接失败:' . $e->getMessage());
}

//3. 查询
$stmt = $pdo->query('select * from tb_emp'); //返回一个PDOStatement对象

//$row = $stmt->fetch(); //从结果集中获取下一行，用于while循环
$rows = $stmt->fetchAll(); //获取所有

//$row_count = $stmt->rowCount(); //记录数，2
print_r($rows);

//4.数据的添加、修改、删除
//$count  =  $pdo->exec("INSERT into `user` (username, password) VALUES ('王菲', '111')"); //返回受影响的行数
//echo $pdo->lastInsertId();

//$count  =  $pdo->exec("update user set username='test2' where id = 13"); //返回受影响的行数
//$count  =  $pdo->exec("delete from  user where id = 13"); //返回受影响的行数
//
//echo '受影响的行数：'.$count.'<br>';

