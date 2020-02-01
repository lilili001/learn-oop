<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/19
 * Time: 14:02
 * 以todo 为例子
 * todo 有描述，有是否完成属性
 */

class Task
{
    //任务描述
    public $description ;
    //任务是否完成
    public $completed = false;
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

$task2 = new Task('learn php');
var_dump($task2->description);