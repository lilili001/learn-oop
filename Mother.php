<?php

class Mother
{
    protected function getEysCount()
    {
        return 2;
    }
}

class child extends Mother {
    public function getEyes()
    {
        return $this->getEysCount();
    }
    public function getEysCount()
    {
        return 3;
    }
}

$child = new Child();
var_dump($child->getEysCount());