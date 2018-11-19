<?php

class DB {

	public static $db;

	public static function init($dbtype, $config) {
	    self::$db = $dbtype::getInstance($config);
	}

	public static function select($sql)
    {
        return self::$db->select($sql);
    }

    public static function selectOne($sql){
        return self::$db->selectOne($sql);
    }

    /**
     * @param $sql
     * @return mixed 操作成功返回受影响的行数 错误返回0
     */
    public static function exec($sql)
    {
        return self::$db->exec($sql);
    }

    /**
     * @return mixed
     */
    public static function getLastInsertId()
    {
        return self::$db->getLastInsertId();
    }

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

}

?>