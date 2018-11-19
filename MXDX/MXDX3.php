<?php
header("Content-Type: text/html; charset=UTF-8");

/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/10/24
 * Time: 16:07
 */
/*数据访问：
1.parent关键字可以用于调用父类中被子类重写的方法
2.self关键字可以用于访问类自身的成员方法，也可以用于访问自身的静成员和类常量
；不能用于访问类自身的属性；使用常量的时候不需要在常量名称前面添加$符号。
3.static关键字用于访问类自身定义的静态成员，防伪静态属性时需要在属性前面加$符号
*/
class BaseClass{
    public function text()
    {
        echo "BaseClass::test called"."<br />";
    }
    //添加 final 关键字能让父类中的方法不能够在子类中被重写
    public function text1()
    {
        echo "BaseClass::test1 called"."<br />";
    }
}
class ChildClass extends BaseClass{
    const CONST_VALUE = ' Zheng Cheng';
    private static $sValue = 'static Value';
    public function text($tmp = null)
    {
        echo "ChildClass::test called".$tmp."<br />";
        parent::text();//用parent关键字可以访问父类中被子类重写的方法
        self::called();
        echo self::CONST_VALUE;
        echo static::$sValue;
    }
    public function called()
    {
        echo "ChildClass::called()"."<br />";
    }
}
$obj = new ChildClass();
$obj ->text();