<?php

/**
 * Created by PhpStorm.
 * User: miyaye
 * Date: 2020/1/30
 * Time: 下午12:01
 */
interface Logger
{
    //子类必须要继承这个方法
    public function save($message);
}

class FileLogger implements Logger{
    public function save($message)
    {
        var_dump('save into file ' . $message);
    }
}
class DataBaseLogger implements Logger{
    public function save($message)
    {
        var_dump('save into database '.$message);
    }
}
class UserController{
    protected $logger;
    /**
     * UserController constructor.
     * @param $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function register()
    {
        $this->logger->save('alice');
    }
}


$user = new UserController(new FileLogger());
$user->register();