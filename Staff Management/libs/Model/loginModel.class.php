<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/19
 * Time: 9:54
 */
class loginModel{
    public function doLogin($username){
       return DB::findOne("select * from tb_admin where Aadmin ='{$username}'");
    }
}