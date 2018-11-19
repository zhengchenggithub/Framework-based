<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/10/24
 * Time: 18:39
 *
 *
 *      抽象类
 */
//abstract关键字用于定义抽象类
abstract class ACanEat{
    //在抽象方法前面添加abstract关键字可以标明这个方法是抽象方法
    //不需要具体的实现
    abstract public function eat($food);
    //抽象类中可以包含普通的方法，有方法的具体实现
    public function breath(){
        echo "Breath use the air"."<br />";
    }
}
//继承的抽象类的关键字是extends
class Human extends ACanEat{
    //继承抽象类的子类需要实现抽象类中定义的抽象方法
    public function eat($food)
    {
        echo "Human eating".$food."<br />";
    }
}
class Animal extends ACanEat{
    public function eat($food)
    {
        echo "Animal eating".$food."<br />";
    }
}
$man = new Human();
$man -> eat("Apple");
$man -> breath();//和Animal共用了抽象类中的Breath（）方法；
$monkey = new Animal();
$monkey -> eat("Banana");
$monkey -> breath();
