<?php
header("Content-type: text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/6
 * Time: 21:39
 */
require_once ('../smarty-3.1.33/libs/Smarty.class.php');
$smarty = new Smarty();
//五配置的介绍
$smarty -> left_delimiter = '{';//左定界符
$smarty -> right_delimiter = '}';//右定界符
$smarty -> template_dir = "tpl";//html模板的地址
$smarty -> compile_dir = "template_c";//模板编译生成文件
$smarty -> cache_dir = "cache";//缓存
//以下便是开启缓存的另外两个配置。因为通常不用smarty缓存机制所以此项为了解
//$smarty -> caching = true;    //开启缓存
//$smarty -> cache_lifetime = 120;      //缓存时间

//$smarty ->assign('time',time());
//$smarty -> assign('articletitle','zheng cheng');
//$arr = array('articlecontent' => array('title' => 'smarty学习','author' => '郑诚'));
//$smarty -> assign('arr',$arr);
//$smarty -> assign('articletitle1','');
//
//$smarty ->assign('url','https://www.imooc.com/video/1059');
//$smarty ->assign('zhengcheng','开心的一天
//开心的一天
//开心的一天');
//$articlelist = array(
//    array(
//        "title" => "第一篇文章",
//        "author" => "郑诚",
//        "content" => "hello world"
//    ),
//    array(
//        "title" => "第二篇文章",
//        "author" => "小明",
//        "content" => "hi boy"
//    ),
//    array(
//        "title" => "第三篇文章",
//        "author" => "小明",
//        "content" => "hi boy"
//    ),
//    array(
//        "title" => "第四篇文章",
//        "author" => "小明",
//        "content" => "hi boy"
//    ),
//    array(
//        "title" => "第五篇文章",
//        "author" => "小明",
//        "content" => "hi boy"
//    ),
//    array(
//        "title" => "第六篇文章",
//        "author" => "小明",
//        "content" => "hi boy"
//    ),
//);
//$smarty ->assign("articlelist",$articlelist);
//class My_object {
//    function methl($params){
//        return $params[0].'已经'.$params[1];
//    }
//}
//$myobj = new My_object();
//$smarty ->assign("myobj",$myobj);
//$smarty ->assign('str','abcdefg');
//function test($params){
//    $p1 = $params['p1'];
//    $p2 = $params['p2'];
//    $name = $params['name'];
//    return '传入的参数一为'.$p1.',传入的参数二为'.$p2.$name;
//}
//$smarty ->registerPlugin('function','f_test','test');
//$smarty -> display('test.tpl');
//$smarty ->display('area.tpl');
//$smarty -> assign('time',time());
//$smarty -> display('datetime.tpl');
$smarty -> assign('str','Hello，my name is zhengcheng。how are you？');
$smarty -> display('content.tpl');


