<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {

        /*
         *      URL_MODEL
         * 1 默认模式 pathinfo
         * http://localhost:8088/phpText/ThinkPHP2/admin.php/Home/Index/user/id/1.html
         * 0 普通模式
         * http://localhost:8088/phpText/ThinkPHP2/admin.php?m=Home&c=Index&a=user&id=1
         * 2 重写模式
         * http://localhost:8088/phpText/ThinkPHP2/Home/Index/user/id/1.html
         * 3 兼容模式
         * http://localhost:8088/phpText/ThinkPHP2/admin.php?s=/Home/Index/user/id/1.html
         * */
        echo C('URL_MODEL').'<br >';

        /*
         * U方法
         * U('模块(M)/方法(A)',array(id => 1)-传值,'xxxxx如html,shtml,htm-后缀','true/false-是否跳转','localhost')
         * */
        echo U('Index/user',array(id => 1));



//        echo C('name').'<br>';
//        echo C('sex');
//        $this->show(
//            '<style type="text/css">*{ padding: 0; margin: 0; }
//div{ padding: 4px 48px;}
////body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
//    }
    }
    public function user(){
        echo 'id is:'.$_GET['id'].'<br />';
        echo '这是INDEX模板的user方法';
    }
}