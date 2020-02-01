<?php

/**
 * Created by PhpStorm.
 * User: miyaye
 * Date: 2020/1/30
 * Time: 上午11:25
 */
class LightSwitch
{
    public function on()
    {
        //在类里面使用 private方法不会报错
        $this->connect();
    }

    public function off()
    {
        
    }

    private function connect()
    {
        var_dump('connect');
    }
}

$light = new LightSwitch();

//在类外面使用 private方法会报错
//$light->connect();