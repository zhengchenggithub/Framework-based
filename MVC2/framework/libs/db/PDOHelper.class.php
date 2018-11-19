<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/15
 * Time: 8:40
 */
class PDOHelper{

    private static $instance; //类的对象，静态实例

    private $pdo; //PDO的连接对象

    public $config; //数据库配置

    /*
     * 构造方法  初始化PDO连接数据库对象
     * */
    private function __construct($config)
    {
        //连接数据库
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
        $stmt = $this -> pdo ->query($sql);
        $result = $stmt ->fetch();
        return $result;
    }
    /*
     * 执行sql语句 用于inset update delete操作
     * @param $Sql
     * @return int 操作成功返回受影响的行数 操作不成功返回0
     * */
    public function exec($sql)
    {
        try{
            return $this->pdo->exec($sql);
        }catch (PDOException $e){
            return 0;
        }
    }
    /*
     * 获取最后一次插入操作的行的id
     *
     *
     * @return string*/

    public function getLastInsertId(){
        return $this->pdo->lastInsertId();
    }
}