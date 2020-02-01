<?php

/**
 * Created by PhpStorm.
 * User: miyaye
 * Date: 2019/3/21
 * Time: 下午4:28
 * 静态方法
 */
class Math
{
    public static function add(...$num)
    {
        return array_sum($num);
    }
}

//var_dump(Math::add(1,2,3)) ;

class Person{
    public static $age = 0;

    public function haveBirthday()
    {
        self::$age ++;
    }
}
//实例一个人
$alice = new Person();
//alice 过了一个生日
$alice->haveBirthday();
//打印alice的生日
echo Person::$age; //1

//实力化另一个人
$polyna = new Person();
$polyna->haveBirthday();
echo Person::$age; //2