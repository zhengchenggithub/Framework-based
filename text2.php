<?php
class Circle{
    private $shapeColor;         //图形颜色
    protected  $shapeBoundsX;      //图形原点坐标X

    public function draw(){

        echo "drawing a circle at ($this->shapeBoundsX,)
     in $this->shapeColor".PHP_EOL;
    }

    function __construct($m_shapeColor,$m_shapeBounsX){

        $this->shapeColor = $m_shapeColor;
        $this->shapeBoundsX = $m_shapeBounsX;
    }

    /**
     *添加左侧示例代码__set()和__get()方法
     */
    public function __set($property_name, $property_value)
    {
        $this ->$property_name = $property_value;
    }
    public function __get($property_name)
    {
        if (!isset($this -> $property_name))
        {
            $property_name = null;
        }
        return $this -> $property_name;
    }


}

$circle = new Circle("red", "10");
echo $circle->shapeColor;
$circle->shapeBoundsX = 30;
echo $circle->shapeBoundsX;
echo phpinfo();

?>
