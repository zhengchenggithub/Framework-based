<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/10/25
 * Time: 9:17
 */
//                              魔术方法：
class  MagicTest{
    public function __toString()
    {
        //__tostring会在把对象转换成string的时候自动调用
        return "This is the Class MagicTest"."<br />";
    }
    public function __invoke($X)
    {
        //__invoke会在把对象当做一个方法的时候自动调用
        echo "__invoke called with parameter"." ".$X."<br />";
    }
    //方法的重载
    //这个的方法的参数第一个就是调用方法的名称，第二个参数就是方法调用的参数组成的数组
    public function __call($name, $arguments)
    {
        echo "Calling".$name."with parameters:".implode(",", $arguments)."<br />";
    }
    //静态方法的重载，注意这个方法需要设定为sratic
    public  static function __callStatic($name,$arguments)
    {
        echo "Calling".$name."with parameters:".implode(",", $arguments)."<br />";
    }
    //属性的重载
    public function __get($name)//获得一个类的成员变量时调用
    {
        return "Geting the peoperty".$name."<br />";
    }
    public function __set($name, $value)//设置一个类的成员变量时调用
    {
        echo "Seting the property".$name."to value".$value."<br />";
    }
    public function __isset($name)//当对不可访问属性isset（）时被调用
    {
        echo "__isset invoked <br / >";
        return false;
    }
    public function __unset($name)//当对不可访问属性unset()时被调用
    {
        echo "unseting property".$name."<br />";
    }
    public $name;
    function __clone()
    {
        $this -> name ='RBD';
    }
}
//$obj = new MagicTest();
//echo $obj."<br />";
//$obj("zc");
//$obj -> runTest("para1","para2");
//MagicTest::runTest("para1","para2");
//echo $obj -> className."<br />";
//$obj -> className = 'zhengcheng'."<br />";
//echo '$obj -> classname is set'.isset($obj -> className)."<br />";
//echo '$obj -> classname is empty'.empty($obj -> className)."<br />";
//unset($obj -> className);
$james = new MagicTest();
$james -> name ='James';
$james2 = clone $james;//对象复制--clone关键字
echo "Before set up:James2".$james2->name."<br />";
$james2 -> name ='James2';
echo $james -> name."<br />";
echo  $james2 ->name."<br>";