<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/6
 * Time: 20:02
 */
function C($name,$method){
    require_once('libs/Controller/'.$name.'Controller.class.php');
//    $testController = new testController();
//    $testController ->show();
    eval('$obj = new '.$name.'Controller();
            $obj ->'.$method.'();'
    );
}
function M($name){
    require_once ('libs/Model/'.$name.'Model.class.php');
    //$testModel = new testModel();
    eval('$obj = new '.$name.'Model();');
    return $obj ;
}
function V($name){
    require_once ('libs/View/'.$name.'View.class.php');
    eval('$obj = new '.$name.'View();');
    return $obj;
}
function daddslashes($str){
    //作用是对一些非法字符进行转义
    //get_magic_quotes_gpc()作用判断魔法符号打开状态，当魔法符号打开的时候返回true,
    //addslashes($str)作用是对单引号或者特殊符号进行转义
    return (!get_magic_quotes_gpc())?addslashes($str):$str;
}
function ORG($path,$name,$params=array()){
    //_path为路径 name为第三方类名 params是该类初始化的时候需要指定的，赋值的属性，格式为array（属性名=>属性值）
    require_once 'libs/ORG/'.$path.$name.'.class.php';
    $obj = new $name();
    if (!empty($params)){
        foreach ($params as $key=>$value){
            $obj -> $key = $value;
        }
    }
        return $obj;
}