<?php

class Person{
    protected $name;

    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}

//员工
class Staff{
    protected $members = [];
    public function add(Person $person){
        $this->members[] = $person;
    }
}

//公司
class Business{
    protected $staff;

    /**
     * Business constructor.
     * @param $staff
     */
    public function __construct($staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }
}

$alice = new Person('AliceTomas');
$staff = new Staff();
$com = new Business($staff);
$com->hire($alice);
var_dump($staff);