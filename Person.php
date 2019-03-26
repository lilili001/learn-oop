<?php
class Person
{
    public $name;
    protected $age;

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        if($age < 18){
            throw new Exception('not old enough');
        }
        $this->age = $age;
    }

    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}

$jeffrey = new Person('jeffery');
//$jeffrey->age = 30;
$jeffrey->setAge(30);
var_dump($jeffrey->getAge());