<?php
header("Content-Type: text/html; charset=UTF-8");
date_default_timezone_set("PRC");
/**
 * 继承
 * 1. 定义人类
 * 2. 让NbaPlayer继承人类
 * 3. PHP中类不允许同时继承多个父类，也就是extends后面只能跟一个父类名称，这个特性被称为PHP的单继承特性
 *
 *
 *
 *  静态成员所要注意的细节：
 * 1.静态属性用于保存类的共有数据
 * 2.静态方法里面只能访问静态属性
 * 3.静态成员不需要实例化对象就可以使用
 * 4.类的内部可以通过self或者static关键字访问自身静态属性成员
 * 5.可以通过parent关键字访问父类的静态成员
 * 6.可以通过类的名称在类定义外部访问静态成员
 */

class Human{
    public $name;
    protected $height; //只有自身和子类能访问
    public $weight;
    private $isHungry = true;
    public static $sValue ="Static value in Human class";
    public function eat($food){
        echo $this->name . "'s eating ". $food. "\n";
    }
    public function info()
    {
        echo "HUMAN:".$this ->name.";".$this ->height.";".$this->isHungry."<br/>";
        $this->isHungry."<br/>";
    }
}

// extends关键字用于说明该类继承自某个父类
class NbaPlayer extends Human
{
    // 类的属性的定义
    public $team="Bull";
    public $playerNumber="23";

    private $age="40"; // private 类型的属性不能被对象外部访问，但是可以在对象内部使用

    //静态属性定义时访问控制关键字后面添加static关键字即可，注意在访问静态成员的时候：：后面需要跟$符号。
    public static $president = "David Strern";
    //静态方法定义
    public static function changePresident($newPrsdt)
    {
        //在类定义中使用静态成员的时候，用self关键字或者static关键字可以访问本类当前类的静态成员
        //后面跟着：：操作符，即可。
        static::$president =$newPrsdt;
        //使用parent访问父类中的静态成员。
        echo parent::$sValue."<br />";
    }
    // 默认的构造函数，在对象被实例化的时候自动调用
    /*function __construct() {
       print "In NbaPlayer constructor\n";
    }*/

    // 构造函数通常用于初始化对象的属性值
    function __construct($name, $height, $weight, $team, $playerNumber) {
        $this->name = $name; // $this是php里面的伪变量，表示对象自身
        $this->height = $height; // 通过$this可以设置对象的属性值
        $this->weight = $weight;
        $this->team = $team;
        $this->playerNumber = $playerNumber;
    }

    // 析构函数，用于清理程序中使用的系统资源，比如释放打开的文件等等
    // 析构函数在该对象不会再被使用的情况下自动调用
    function __destruct() {
        print "Destroying " . $this->name . "\n";
    }

    // 类的方法的定义
    public function run() {
        echo "Running\n";
    }

    public function jump(){
        echo "Jumping\n";
    }
    public function dribble(){
        echo "Dribbling\n";
    }
    public function shoot(){
        echo "Shooting\n";
    }
    public function dunk(){
        echo "Dunking\n";
    }
    public function pass(){
        echo "Passing\n";
    }
    public function getAge()
    {
        echo $this->name."不给看"."\n";
    }
}

/**
 * 1. 类实例化为对象时使用new关键字，new之后紧跟类的名称和一对括号。
 * 2. 使用对象可以像使用其他值一样进行赋值操作
 */
$jordan = new NbaPlayer("Jordan", "198cm", "98kg", "Bull", "23");
// 访问对象的属性使用的语法是->符号，后面跟着属性的名称
// 调用对象的某个方法使用的语法是->符号，后面跟着方法的名称和一对括号
//$jordan->eat("apple"); // 只要是Human类的子类的对象，就可以调用eat方法
$james = new NbaPlayer("James", "203cm", "120kg", "Heat", "6");
//$jordan-> changePresident("zhengcheng");
// echo "jordan:".$jordan->president."<br />";
// echo "james:".$james->president."<br />";
//在类定义外部访问静态属性，我们可以用类名加：：操作符访的方法访问类的静态成员。
echo NbaPlayer::$president."<br />";
NbaPlayer::changePresident("郑诚");
echo NbaPlayer::$president."<br />";
echo Human::$sValue."<br />";
?>