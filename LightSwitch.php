<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/19
 * Time: 18:40
 */

class LightSwitch
{
    public function on()
    {
        
    }
    public function off()
    {

    }
    public function connect()
    {
        var_dump('connected');
    }
}
$light = new LightSwitch();
$light->connect();