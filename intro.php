<?php

class Task {
    public $desc;

    public $completed = false;

    public function __construct($desc)
    {
        // var_dump($desc);
        $this->desc = $desc;
    }

    public function complete()
    {

        $this->completed = true;
    }
}
$task = new Task('Learn oop');

// $task2 = new Task("pick up groceries");

$task->complete();


// var_dump($task2->desc);
var_dump($task->completed);

?>

