<?php

require 'functions.php';

class Task{

    public $description;

    protected $completed =  false;

    public function __construct($description){

        $this->description = $description;
    }

    public function complete(){

        $this->completed = true;
    }

    public function isCompleted(){

        return $this->completed;
    }
}


$tasks = [
    new Task('Limpar o quarto'),
    new Task('Maratonar O Senhor dos Anéis'),
    new Task('Estudar Clean Code'),
    new Task('Deixar a estrelinha no repositório')
];

$tasks[0]->complete();
$tasks[3]->complete();
require 'index.view.php';
