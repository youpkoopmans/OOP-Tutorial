<?php
/**
 *
 */
echo "<pre>";

class Task
{
    public $title;
    public $description;
    public $completed = false;

    public function title()
    {

    }

    public function __construct($description)
    {
      $this->description = $description;
    }

    public function complete()
    {
      $this->completed = true;
    }
}

$task = new Task('Learn OOP', 'The teacher bla bla bla...');
$task2 = new Task('Pick up groceries');

$task->complete();

var_dump($task->description);
var_dump($task->completed);
