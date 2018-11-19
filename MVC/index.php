<?php
header("Content-type: text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/6
 * Time: 19:12
 */
/*
    第一步 浏览者      -》调用控制器，对他发出指令
    第二步 控制器      -》按指令选取一个合适的模型
    第三步 模型        -》按控制器指令取相应数据
    第四步 控制器      -》按指令选取相应的视图
    第五步 视图        -》把第三步取到的数据按用户想要的样子显示出来

*/

//        $controllerAllow = array('test','index');
//        $methodAllow = array('test','index','show');
//        //daddslashes（）函数作用过滤非法参数
//        $controller = in_array($_GET['controller'],$controllerAllow)?daddslashes($_GET['controller']):'index';
//        $method = in_array($_GET['method'],$methodAllow)?daddslashes($_GET['method']):'index';
//        C($controller,$method);
        require_once ('function.php');
        require_once ('config.php');
        $view = ORG('Smarty/','Smarty',$viewconfig);
        $controller = $_GET['controller'];
        $method = $_GET['method'];
        C($controller, $method);