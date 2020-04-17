<?php

namespace src\controller;

class Controller{

    public function invoke(){
        $request = isset($_REQUEST["request"]) ? $_REQUEST["request"] : '';

        switch ($request) {
            case 'homepage':
                $controller_categoria = new ControllerCategorie;
                echo $controller_categoria->getAllCategories();
                break;

            case 'homepage':
                $controller_libri = new ControllerLibri;
                echo $controller_libri->getAllBooks();
                break;
            
            default:
                $default_controller = new DefaultController;
                $default_controller->index();
                break;
        }
    }
}