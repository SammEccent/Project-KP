<?php
// Definisi route aplikasi menggunakan FastRoute
require_once __DIR__ . '/../vendor/autoload.php';

use FastRoute\RouteCollector;

$dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $r) {
    // Beranda
    $r->addRoute('GET', '/', 'App\Controllers\HomeController@index');
    $r->addRoute('GET', '/beranda', 'App\Controllers\HomeController@index');

    // Profil
    $r->addRoute('GET', '/profil', 'App\Controllers\ProfilController@index');
    
    // Sejarah
    $r->addRoute('GET', '/profil/sejarah', 'App\Controllers\SejarahController@index');
    $r->addRoute('GET', '/profil/sejarah/create', 'App\Controllers\SejarahController@create');
    $r->addRoute('POST', '/profil/sejarah/create', 'App\Controllers\SejarahController@create');
    $r->addRoute('GET', '/profil/sejarah/edit/{id:\d+}', 'App\Controllers\SejarahController@edit');
    $r->addRoute('POST', '/profil/sejarah/edit/{id:\d+}', 'App\Controllers\SejarahController@edit');
    $r->addRoute('POST', '/profil/sejarah/delete/{id:\d+}', 'App\Controllers\SejarahController@delete');
    
    // Visi Misi
    $r->addRoute('GET', '/profil/visi-misi', 'App\Controllers\ProfilController@visiMisi');
    
    // Struktur Organisasi
    $r->addRoute('GET', '/profil/struktur', 'App\Controllers\ProfilController@struktur');

    // Fasilitas
    $r->addRoute('GET', '/fasilitas/kesehatan', 'App\Controllers\FasilitasController@kesehatan');
    $r->addRoute('GET', '/fasilitas/pendidikan', 'App\Controllers\FasilitasController@pendidikan');
    $r->addRoute('GET', '/fasilitas/ibadah', 'App\Controllers\FasilitasController@ibadah');
    $r->addRoute('GET', '/fasilitas/balai', 'App\Controllers\FasilitasController@balai');

    // Pelayanan
    $r->addRoute('GET', '/pelayanan/kk', 'App\Controllers\PelayananController@kk');
    $r->addRoute('GET', '/pelayanan/ktp', 'App\Controllers\PelayananController@ktp');
    $r->addRoute('GET', '/pelayanan/kia', 'App\Controllers\PelayananController@kia');
    $r->addRoute('GET', '/pelayanan/akta-lahir', 'App\Controllers\PelayananController@aktaLahir');
    $r->addRoute('GET', '/pelayanan/akta-kematian', 'App\Controllers\PelayananController@aktaKematian');
    $r->addRoute('GET', '/pelayanan/akta-nikah', 'App\Controllers\PelayananController@aktaNikah');
    $r->addRoute('GET', '/pelayanan/akta-cerai', 'App\Controllers\PelayananController@aktaCerai');

    // Kontak (footer)
    // $r->addRoute('GET', '/kontak', '...');
});

// Ambil URI dari query string 'page' (untuk kompatibilitas dengan navbar)
$page = $_GET['page'] ?? '/';
if ($page === 'utama' || $page === '' || $page === '/') {
    $uri = '/';
} else {
    $uri = '/' . ltrim($page, '/');
}

$httpMethod = $_SERVER['REQUEST_METHOD'];
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        http_response_code(404);
        echo '<h1>404 Not Found</h1>';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        http_response_code(405);
        echo '<h1>405 Method Not Allowed</h1>';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        
        // Parse controller@method
        list($controller, $method) = explode('@', $handler);
        
        // Instantiate controller
        $controllerInstance = new $controller();
        
        // Call method
        $result = $controllerInstance->$method();
        
        // If result is an array with view and data
        if (is_array($result) && isset($result['view'])) {
            $view = $result['view'];
            $data = $result['data'] ?? [];
            
            // Extract data to make it available in view
            extract($data);
            
            // Include view
            include __DIR__ . '/../app/Views/' . $view . '.php';
        }
        break;
}
