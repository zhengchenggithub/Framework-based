<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/11/15
 * Time: 8:13
 */
class PDOHelper{

    private static $instance;  //静态实例
    private $pdo; //PDO连接对象

    private function __construct($config)
    {
        try {
            $dns = $config['engine'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'] . ';port=' . $config['port'] . ';charset=utf8';
            $this->pdo = new PDO($dns, $config['user'], $config['pwd']);
        } catch (PDOException $e) {
            die('数据库连接失败:' . $e->getMessage());
        }
    }

    public static function getInstance($config){
        if (!(self::$instance instanceof self)) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    public function select($sql)
    {
        $stmt = $this->pdo->query($sql); //返回一个PDOStatement对象
        return $stmt->fetchAll(); //获取所有
    }

    public function selectOne($sql)
    {
        $stmt = $this->pdo->query($sql);
        return $stmt->fetch();
    }

    /**
     * 执行sql语句 用于insert update delete操作
     * @param $sql
     * @return int 操作成功返回受影响的行数 错误返回0
     */
    public function exec($sql)
    {
        try {
            return $this->pdo->exec($sql);
        } catch (PDOException $e) {
            return 0;
        }
    }

    /**
     * getLastInsertId 获取最后一次插入操作的行id
     *
     * @return string
     */
    public function getLastInsertId()
    {
        return $this->pdo->lastInsertId();
    }
}