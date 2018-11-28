<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/27
 * Time: 16:47
 */
namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller
{

    public function index()
    {
        $this->display();
    }
    public function login()
    {
        //我们不建议直接使用传统方式获取，因为没有统一的安全处理机制，后期如果调整的话，改起来会比较麻烦。
        //所以，更好的方式是在框架中统一使用I函数进行变量获取和过滤。
        //$username = $_REQUEST['username'];
        //$password = $_REQUEST['password'];

        //ThinkPHP获取输入变量
        $username = I('username');
        $password = I('password');

        $Admin = M('admin');
        $user = $Admin->where("Aname = '{$username}'")->find();

        if (!$user)
        {
            $this->error('没有该用户');
        }
        if ($user['apassword'] == $password)
        {
            $_SESSION['username'] = $username;
            $this->success('登录成功',U('emplist/index'),1);
        }else{
            $this->error('密码错误');
        }

    }
    public function logout()
    {
        session(null);
        $this->success('退出成功',U('login/index'));
    }
}