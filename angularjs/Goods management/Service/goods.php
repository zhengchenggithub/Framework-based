<?php
header("Content-type: text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/5
 * Time: 11:06
 */
require_once 'json.php';
require_once 'Db.php';
$type = $_REQUEST['type'];
function initGoods(){
    //1.请求数据库，返回商品数据
    $connect = Db::getInstance() -> connect();
    $result = mysql_query("select * from items",$connect);
    $items = array();
    while ($row = mysql_fetch_assoc($result)){
        array_push($items,$row);
    }
    if ($result){
        Response::json('1000','商品获取成功',$items);
    }else{
        Response::json('-10001','数据获取失败');
    }
}
function addGoods(){
    //1.判断商品是否重复
    //2.添加新商品
    $goodsName = $_REQUEST['goodsName'];
    $price = $_REQUEST['price'];
    $connect = Db::getInstance() -> connect();
    $result = mysql_query("select * from items where goodsName = '{$goodsName}'",$connect);
    if (mysql_num_rows($result)){
        Response::json(-10001,'商品重复，请重新添加');
    }else{
        $result = mysql_query("insert into items(goodsName,price) values ('{$goodsName}',{$price})",$connect);
        if ($result){
            $id = mysql_insert_id($connect);
            Response::json('10000','添加成功',array('id' => $id,'goodsName' => $goodsName,'price' =>$price));
        }else{
            Response::json('-1000','添加失败');
        }
    }
}
function editGoods(){
    //1.判断商品是否重复
    //2.添加新商品
    $id =$_REQUEST['id'];
    $goodsName = $_REQUEST['goodsName'];
    $price = $_REQUEST['price'];
    $connect = Db::getInstance() -> connect();
    $result = mysql_query("update items set goodsName = '{$goodsName}',price = {$price} where id = {$id}",$connect);
    if ($result){
        Response::json('10000','修改商品成功',array('id' => $id,'goodsName' => $goodsName,'price' =>$price));
    }else{
        Response::json('-1000','修改失败');
    }
//    $result = mysql_query("select * from items where goodsName = '{$goodsName}'",$connect);
//    if (mysql_num_rows($result)){
//        Response::json(-10001,'商品名重复，请重新修改');
//    }else{
//
//    }
}
function deleteGoods(){
    $id = $_REQUEST['id'];
    $connect = Db::getInstance() -> connect();
    $result = mysql_query("delete from items where id ={$id}",$connect);
    if ($result){
        Response::json('10000','删除成功');
    }else{
        Response::json('-10000','删除失败');
    }
}
switch ($type){
    case 'init';
        initGoods();
        break;
    case 'dele';
        deleteGoods();
        break;
    case'add';
        addGoods();
        break;
    case 'edit';
        editGoods();
    default:
        break;
}