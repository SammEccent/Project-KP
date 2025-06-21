<?php
require_once '../app/init.php';

// Admin routing system
class AdminApp {
    protected $controller = 'AdminController';
    protected $method = 'dashboard';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();
        
        // For admin routes, we always use AdminController
        // The first URL segment becomes the method
        if (isset($url[0])) {
            if (method_exists('AdminController', $url[0])) {
                $this->method = $url[0];
                unset($url[0]);
            }
        }

        // Require the AdminController file
        require_once '../app/controllers/AdminController.php';
        $this->controller = new AdminController();

        // Set the parameters
        if (!empty($url)) {
            $this->params = array_values($url);
        } else {
            $this->params = [];
        }

        // Call the controller method with the parameters
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return [];
    }
}

// Initialize admin app
$adminApp = new AdminApp();
?> 