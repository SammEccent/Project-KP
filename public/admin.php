<?php
require_once '../app/init.php';

// Start session
session_start();

// Define admin routes
$routes = [
    // Dashboard
    'GET|/admin/dashboard' => ['AdminController', 'dashboard'],
    'GET|/admin' => ['AdminController', 'dashboard'],
    
    // Struktur Organisasi
    'GET|/admin/strukturOrganisasi' => ['AdminController', 'strukturOrganisasi'],
    'POST|/admin/strukturOrganisasi/save' => ['AdminController', 'strukturOrganisasiSave'],
    'GET|/admin/strukturOrganisasi/delete/{id}' => ['AdminController', 'strukturOrganisasiDelete'],
    
    // Data Anggota
    'GET|/admin/anggota' => ['AdminController', 'anggota'],
    'POST|/admin/anggota/save' => ['AdminController', 'anggotaSave'],
    'GET|/admin/anggota/delete/{id}' => ['AdminController', 'anggotaDelete'],
    
    // Fasilitas
    'GET|/admin/fasilitas' => ['AdminController', 'fasilitas'],
    'POST|/admin/fasilitas/save' => ['AdminController', 'fasilitasSave'],
    'GET|/admin/fasilitas/delete/{id}' => ['AdminController', 'fasilitasDelete'],
    
    // Berita
    'GET|/admin/berita' => ['AdminController', 'berita'],
    'POST|/admin/berita/save' => ['AdminController', 'beritaSave'],
    'GET|/admin/berita/delete/{id}' => ['AdminController', 'beritaDelete'],
    
    // Login & Logout
    'GET|/admin/login' => ['AdminController', 'login'],
    'POST|/admin/login' => ['AdminController', 'login'],
    'GET|/admin/logout' => ['AdminController', 'logout'],
];

// Get current URI
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Remove base path from URI
$basePath = '/Project-KP';
if (strpos($uri, $basePath) === 0) {
    $uri = substr($uri, strlen($basePath));
}

// Remove query string
$uri = parse_url($uri, PHP_URL_PATH);

// Find matching route
$matchedRoute = null;
$params = [];

foreach ($routes as $route => $handler) {
    list($routeMethod, $routePath) = explode('|', $route);
    
    if ($routeMethod !== $method) {
        continue;
    }
    
    // Convert route parameters to regex
    $pattern = preg_replace('/\{([^}]+)\}/', '([^/]+)', $routePath);
    $pattern = '#^' . $pattern . '$#';
    
    if (preg_match($pattern, $uri, $matches)) {
        $matchedRoute = $handler;
        // Extract parameters
        preg_match_all('/\{([^}]+)\}/', $routePath, $paramNames);
        for ($i = 1; $i < count($matches); $i++) {
            $params[$paramNames[1][$i-1]] = $matches[$i];
        }
        break;
    }
}

if ($matchedRoute) {
    list($controllerName, $methodName) = $matchedRoute;
    
    // Create controller instance
    $controller = new $controllerName();
    
    // Call method with parameters
    if (!empty($params)) {
        call_user_func_array([$controller, $methodName], $params);
    } else {
        $controller->$methodName();
    }
} else {
    // 404 Not Found
    http_response_code(404);
    echo '<h1>404 - Halaman Admin Tidak Ditemukan</h1>';
    echo '<p>URL yang Anda cari tidak ditemukan.</p>';
    echo '<a href="' . BASE_URL . '/admin">Kembali ke Dashboard</a>';
}
?> 