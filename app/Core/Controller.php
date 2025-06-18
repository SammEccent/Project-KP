<?php

class Controller{
    public function view($view, $data = []){
        // Check if the view file exists
        if (file_exists('../app/Views/' . $view . '.php')) {
            // If it exists, require the view file
            require_once '../app/Views/' . $view . '.php';
        } else {
            // If it does not exist, throw an error
            die('View does not exist: ' . $view);
        }
    }
}