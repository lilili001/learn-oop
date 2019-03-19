<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/19
 * Time: 14:02
 */

class Task
{
    public $description ;
    public $completed;
    public function __construct($description){
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('learn oop');
$task->complete();
var_dump( $task->completed );