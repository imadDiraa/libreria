<?php

namespace src\controller;

class Controller{

    public function invoke(){
        $request = isset($_REQUEST["request"]) ? $_REQUEST["request"] : '';

        switch ($request) {
            case 'homepage':
                include("src\controller\ControllerCategorie.php");
                $controller_categoria = new ControllerCategorie;
                echo $controller_categoria->getAllCategories();
                break;

            case 'homepage':
                include("src\controller\ControllerLibri.php");
                $controller_libri = new ControllerLibri;
                echo $controller_libri->getAllBooks();
                break;
            
            default:
                include("src\controller\DefaultController.php");
                $default_controller = new DefaultController;
                $default_controller->index();
                break;
        }
    }
}