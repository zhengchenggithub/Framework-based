<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/19
 * Time: 9:33
 */
class loginController{
    public function index(){
        VIEW::display('admin/login.html');
    }

    public function login(){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $user = M('login')->dologin($username);

        if (!$user)
        {
            $this->showMessage('没有此用户请注册','admin.php?controller=index&method=index');
        }
        if ($user['Apassword'] == $password)
        {
            $_SESSION['username'] = $username;
            //$this->showMessage('登录成功','admin.php?controller=emplist&method=index');
        }else{
            $this->showMessage('密码错误，请从新输入!','admin.php?controller=login&method=index');
        }
    }
    public function logout(){ 
        unset($_SESSION);
        session_destroy();
        $this->showMessage('退出成功！','admin.php?controller=login&method=index');
    }
    private function showMessage($info, $url){
        echo "<script>alert('$info');window.location.href='$url'</script>";
        exit;
    }
}
