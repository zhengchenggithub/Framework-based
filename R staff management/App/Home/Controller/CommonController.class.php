<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/27
 * Time: 18:35
 */
namespace Home\Controller;

use Think\Controller;

class CommonController extends Controller
{
    public function _initialize(){
        //判断用户是否已经登录
        if (!isset($_SESSION['username'])) {
            $this->redirect('login/index');
        }
    }
}