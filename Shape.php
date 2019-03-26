<?php
/*图形类*/
abstract class Shape
{
    protected $color;

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Shape constructor.
     * @param $color
     */
    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    //定义子类必须实现的抽象方法, 如果子类没有定义该抽象方法则不能运行, 直接报错
    abstract public function getArea();

}

class Square extends Shape{
    protected $len = 4;
    public function getArea()
    {
        return pow($this->len , 2);
    }
}

class Circle extends Shape{
    public function getArea()
    {
        // TODO: Implement getArea() method.
    }
}

$shape = new Circle('blue');
var_dump($shape->getArea()); // blue