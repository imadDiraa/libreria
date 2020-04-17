<?php

    namespace src\controller;

    include_once("src\model\LibriModel.php");
    
    use src\model\LibriModel;

    class ControllerLibri{
        private $modello;

        public function __construct(){
            $this->modello = new LibriModel();
        }

        public function getAllBooks(){
            $books = $this->modello->findAll();
            return json_encode($books);
        }
    }