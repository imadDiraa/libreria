<?php

    namespace src\controller;

    include_once("src\model\CategorieModel.php");
    
    use src\model\CategorieModel;

    class ControllerCategorie{
        private $modello;

        public function __construct(){
            $this->modello = new CategorieModel();
        }

        public function getAllCategories(){
            $categories = $this->modello->findAll();
            return json_encode($categories);
        }
    }