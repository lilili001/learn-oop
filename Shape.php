<?php

/**
 * Created by PhpStorm.
 * User: miyaye
 * Date: 2020/1/30
 * Time: 上午11:52
 */
abstract class Shape
{
    protected $color;

    /**
     * Shape constructor.
     * @param $color
     */
    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
    abstract public function getArea();
}

class Square extends Shape{
    protected $length = 4;
    public function getArea()
    {
        return pow($this->length,2);
    }
}

class Circle extends Shape{
    public function getArea()
    {
        
    }
}

$square = new Square();
var_dump($square->getArea());