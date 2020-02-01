<?php

class Mother
{
    protected function getEysCount()
    {
        return 2;
    }
}

class Child extends Mother{
    public function getEys()
    {
        //子类中访问父类的方法
        return $this->getEysCount();
    }
}

$alice = new Child();
var_dump($alice->getEys());
