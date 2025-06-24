<?php

class App {
    // Property
    protected $controller = 'berandaController'; 
    protected $method = 'index';
    protected $params = [];

    // Constructor
    public function __construct() {
        $url = $this->parseURL();
        
        if (isset($url[0]) && file_exists('../app/controllers/' . $url[0] . 'Controller.php')) {
            // If the controller file exists, set the controller
            $this->controller = $url[0] . 'Controller';
            unset($url[0]); // Remove the controller from the URL array
            
        }

        // Require the controller file
        require_once '../app/controllers/' . $this->controller . '.php';
        // Create an instance of the controller
        $this->controller = new $this->controller;

        // Check if the method exists in the controller
        if (isset($url[1]))  {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1]; // Set the method
                unset($url[1]); // Remove the method from the URL array
                
            }
        }

        // Set the parameters (slug)
        $this->params = $url ? array_values($url) : [];

       

        // Call the controller method with the parameters (& & pass the params if any)
        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    // Method to parse the URL
    public function parseURL() {
        if (isset($_GET['url'])) {
            // Remove any trailing slashes and split the URL into parts
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return [];
    }
}