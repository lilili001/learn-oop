<?php

interface  Logger
{
    public function save($message);
}

class DatabaseLogger implements Logger {
    public function save($message)
    {
        var_dump('log into database'.$message) ;
    }
}

class FileLogger implements Logger {
    public function save($message)
    {
        var_dump('log into file'.$message) ;
    }
}

class UserController{
    protected $log;

    /**
     * UserController constructor.
     * @param $log
     */
    public function __construct(Logger $log)
    {
        $this->log = $log;
    }

    public function register()
    {
        $user = 'Alice';
        $this->log->save($user);
    }
}

$controller = new UserController(new DatabaseLogger());
$controller->register();