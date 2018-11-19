<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/9
 * Time: 9:23
 */
class mysql{
    /*报错函数
    @param string $error

    */
    function err($error){
        die("对不起，您的操作有错，错误原因为：".$error);//die有两种作用 输出和终止 相当于echo和exit的组合

    }
    /*连接数据库
     *
     * @param string $confing配置数组array（$dbhost,$dbuser,$dbpsw,$dbname,$dbcharest）
     * @return bool 连接成功或者不成功
     * */
    function connect($config){
        extract($config);
        if (!($con = mysql_connect($dbhost,$dbuser,$dbpsw)))//mysql_connect连接数据库函数
        {
            $this -> err(mysql_error());
        }
        if (!mysql_select_db($dbname,$con))//mysql_select_db选择数据库的函数
        {
            $this -> err(mysql_error());
        }
        mysql_query("set names".$dbcharest);//使用mysql_query设置编码格式 ： mysql_query("set names utf8");
    }
    /*//执行sql语句
     *
     * @param string $sql
     * @return bool 返回执行成功、资源或者执行失败
     *
     * */
    function query($sql){
        if (!$query = mysql_query($sql))        //使用mysql_query()语句来执行SQL语句
        {
            $this -> err($sql."<br />".mysql_error()); //mysql_error报错
        }else{
            return $query;
        }
    }
    /*列表
      @param source $query sql语句通过mysql_query来执行出来的资源
      @return array 返回列表数组
    */
    function findAll($query){
        while ($rs = mysql_fetch_array($query,MYSQLI_ASSOC))//mysql_fetch_array函数把资源转换成数组，一次转换出一行出来
        {
            $list[] = $rs;
        }
        return isset($list)?$list:""; //词语为判断$list是否有值如果有则返回$list没有则返回空值
    }
    /*单条信息
      @param source $query sql语句通过mysql_query来执行出来的资源
      @return array 返回单条信息
    */
    function findOne($query){
        //$rs = mysql_fetch_array($query,MYSQLI_ASSOC);//mysql_fetch_array函数把资源转换成数组，一次转换出一行出来
        $rs = mysql_fetch_assoc($query);//以上两条语句功能相同
        return $rs;
    }
    /*指定行指定字段
  @param source $query sql语句通过mysql_query来执行出来的资源
  @return array 返回指定行的指定字段的值
*/
    function findRusult($query,$row = 0,$field = 0){
        $rs = mysql_result($query,$row,$field);
        return $rs;
    }
    /*添加函数
     *
     *@param string $table 表名
     *@param array $arr  添加数组（包含字段和值的一维数组）*/
     function insert($table,$arr){
         //sql = "insert into 表名(多个字段) values(多个值);"
         foreach ($arr as $key => $value){//foreach循环数组
             $value = mysql_real_escape_string($value);
             $keyArr[] = "`".$key."`";//把$arr数组当中的键名保存到$keyArr数组中
             $valueArr[] = "'".$value."'";//把$ar数组当中的键值保存到$valueArr当中，因为值多为字符串，
             //而SQL语句里面insert当中如果值是字符串的话就要加单引号，所以这个地方要加单引号.
         }
         $keys = implode(",",$keyArr);//implode函数是把数组组合成字符串 implode（分隔符，数组）
         $value = implode(",",$valueArr);
         $sql = "insert into".$table."(".$keys.")";//sql的插入语句  格式：inset into表名（多个字段） values（多个值）
         $this -> query($sql);//调用类自身的query（执行）方法执行这条SQl语句 注：$this值代自身
         return mysql_insert_id();
     }
     /*修改函数
      * @param string $table 表名
      * @param array $arr  添加数组（包含字段和值的一维数组）
      * @param string $where 条件
      * */
     function update($table,$arr,$where){
         //update 表名 set 字段 = 字段值 where。。。。
         foreach ($arr as $key => $value){
             //$value = mysql_real_escape_string($value);
             $keyAndvalueArr = "`".$key."`='".$value."'";
         }
         $keyAndvalues = implode(",",$keyAndvalueArr);
         $sql ="update".$table."set".$keyAndvalues."where".$where; // 修改操作格式 update 表名 set 字段 = 值 where 条件
         $this -> query($sql);
     }
    /*删除函数
     * @param string $table 表名
     * @param string $where 条件
     * */
    function del($table,$where){
        $sql = "delete from".$table."where".$where; //删除语句 格式：delete from 表名 where 条件
        $this  -> query($sql);
    }
}