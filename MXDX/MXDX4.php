<?php
header("Content-Type: text/html; charset=UTF-8");

/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/10/24
 * Time: 17:44
 */
/*          接口：
        类的方法必须实现，接口的方法必须实现
 *
 **/
//interface关键字用于定义接口
interface ICanEat{
    //接口里面的方法不需要有方法的实现
    public function eat($food);
}
//implements关键字用于表现类实现某一个接口
class Human implements ICanEat{
    //实现某个接口之后。必须提供接口中定义的方法的具体实现。
    public function eat($food)
    {
        echo "Human eating".$food."<br />";
    }
}
class Animal implements ICanEat{
    public function eat($food)
    {
        echo "Animal eating".$food."<br />";
    }
}
$obj = new Human();
$obj ->eat('Apple');
$monkey = new Animal();
$monkey -> eat('Banana');
//不能实例接口
//$eatObj = new ICanEat();

//可以用instanceof关键字类判断某个对象是否实现了某个接口
var_dump($obj instanceof ICanEat);
var_dump($monkey instanceof ICanEat);
function checkEat($obj)
{
    if ($obj instanceof ICanEat)
    {
        $obj ->eat('food');
    } else {
        echo "The obj can't eat"."<br />";
    }
}
//相同的一行代码，对于传入不同的接口的实现对象的时候，表现是不同的这就是多态
checkEat($obj);
checkEat($monkey);

interface ICanPee extends ICanEat{
    public function pee();
}
class Human1 implements ICanPee{
    public function pee()
    {
        // TODO: Implement pee() method.
    }
    public function eat($food)
    {
        // TODO: Implement eat() method.
    }
}
