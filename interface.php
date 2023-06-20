<?php

interface Animal {
    public function communicate();
}

class Dog implements Animal {
    public function communicate() {
        return 'bark';
    }
}

class Cat implements Animal {
    public function communicate()
    {
        return 'meow';
    }
}

interface Logger{
    
}

class LogToFile implements Logger{
    public function execute($message){
        var_dump('log the message to a file '. $message);
    }
}

class LogToDatabase implements Logger{
    public function execute($message){
        var_dump('log the message to database');
    }
}

class UserController {

    protected $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }
    public function show(){

    
        $user = "shreyash";

        $this->logger->execute($user);
    }
}

$controller = new UserController(new LogToDatabase);

$controller->show();
  
?>


