<?php
header("Content-Type: text/html; charset=UTF-8");
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/10/24
 * Time: 15:30
 */
//子类中编写父类的方法名完全一致的方法可以完成对父类方法的重写
//（overwrite）重写
//对于不想被任何类继承的类可以在class之前添加关键字 final关键字
//对于想被子类重写的方法，可以在方法定义前面添加关键字 final
class BaseClass{
    public function text()
    {
        echo "BaseClass::test called"."<br />";
    }
    //添加 final 关键字能让父类中的方法不能够在子类中被重写
    final public function text1()
    {
        echo "BaseClass::test1 called"."<br />";
    }
}
class ChildClass extends BaseClass{
    public function text()
    {
        echo "ChildClass::test called"."<br />";
    }
}
$obj = new ChildClass();
$obj ->text();