<?php

//class DB {
//
//	public static $db;
//
//	public static function init($dbtype, $config) {
//		self::$db = new $dbtype;
//		self::$db->connect($config);
//	}
//
//	public static function query($sql){
//		return self::$db->query($sql);
//	}
//
//	public static function findAll($sql){
//		$query = self::$db->query($sql);
//		return self::$db->findAll($query);
//	}
//
//	public static function findOne($sql){
//		$query = self::$db->query($sql);
//		return self::$db->findOne($query);
//	}
//
//	public static function findResult($sql, $row = 0, $filed = 0){
//		$query = self::$db->query($sql);
//		return self::$db->findResult($query, $row, $filed);
//	}
//
//	public static function insert($table,$arr){
//		return self::$db->insert($table,$arr);
//	}
//
//	public static function update($table, $arr, $where){
//		return self::$db->update($table, $arr, $where);
//	}
//
//	public static function del($table,$where){
//		return self::$db->del($table,$where);
//	}
//
//}
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/12
 * Time: 14:46
 */
class DB{
    public static $db;

    public static function init($dbtype,$config){
        self::$db = $dbtype::getInstance($config);
    }

    public static function select($sql)
    {
        return self::$db->select($sql);
    }
    public  static function selectOne($sql)
    {
        return self::$db->selectOne($sql);
    }
    public static function exec($sql)
    {
        return self::$db->exec($sql);
    }
    public static function getLastInsertId()
    {
        return self::$db->getLastInsertId();
    }





//    public static function query($sql){
//        return self::$db -> query($sql);
//    }
//    public static function findAll($sql){
//        $query = self::$db -> query($sql);
//        return self::$db -> findAll($query);
//    }
//    public static function findOne($sql){
//        $query = self::$db -> query($sql);
//        return self::$db -> findOne($query);
//    }
//    public static function findResult($sql,$row = 0,$filed = 0){
//        $query = self::$db -> query($sql);
//        return self::$db -> findResult($query,$row,$filed);
//    }
//    public static function insert($table,$arr){
//        return self::$db -> insert($table,$arr);
//    }
//    public static function update($table,$arr,$where){
//        return self::$db -> update($table,$arr,$where);
//    }
//    public static function del($table,$where){
//        return self::$db ->del($table,$where);
//    }
}