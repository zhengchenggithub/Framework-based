<?php
header("Content-type: text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/10/29
 * Time: 9:31
 */
class Db{
    static private $_instance; //类的对象
    static private $_connectSource;//连接的数据源
    private $_dbConfig = array(
        "host" => "localhost",
        "user" =>  "root",
        "password" => "",
        "database" => "test"
    );
    static public function getInstance()//实例化类
    {
        if (!(self::$_instance instanceof self))
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function connect()
    {
        if (!self::$_connectSource)
        {
            self::$_connectSource = mysql_connect($this->_dbConfig['host'],$this->_dbConfig['user'],$this->_dbConfig['password']);
            if (!self::$_connectSource)
            {
                throw new Exception('my sql connect error'.mysql_error());
            }
        }
        mysql_select_db($this ->_dbConfig['database'],self::$_connectSource);
        mysql_query("set names utf8",self::$_connectSource);
        return self::$_connectSource;
    }

}
