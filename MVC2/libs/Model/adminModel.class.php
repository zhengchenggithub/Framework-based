<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/12
 * Time: 20:55
 */
class adminModel{ //从数据库中存取数据

    public $_table = 'admin'; //定义表名

    //取得用户信息，通过用户名
    function findOne_by_username($username){
        $sql = 'select * from '.$this -> _table.' where username="'.$username.'"';
        return DB::selectOne($sql);
    }

    //用户密码核对 ---》auth模型
}