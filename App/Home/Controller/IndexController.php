<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/28
 * Time: 21:05
 */
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller{
    public function index()
    {
        redirect('login/index');
    }
}