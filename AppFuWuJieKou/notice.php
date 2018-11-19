<?php
require_once 'json.php';
require_once 'dbhelper.php';
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/10/30
 * Time: 17:40
 */
//1.接受字段：社区公告还是个人公告
$type = $_REQUEST['type'];

//2.收集公告信息(从数据库中获取)，发送给app端
$connect = Db::getInstance() ->connect();
$output = array();//用于保存所有的数据
//查询数据库并获取数据
$result = mysql_query("select noticeid,title,descripttion,create_date,type from notice where type = '$type'");
$cnt = mysql_num_rows($result);//获取总条数
if ($cnt > 0)
{
    while ($r = mysql_fetch_array($result))
    {
        $notice = array(
            'noticeid' => (int)$r['noticeid'],
            'title' => $r['title'],
            'descripttion' => $r['descripttion'],
            'create_date' => $r['create_date'],
            'type' => (int)$r['type']
        );
        array_push($output,$notice);
    }
    Response::json('10001','公告信息',$output);
}else{
    Response::json('-10001','当前没有相关公告信息');
}