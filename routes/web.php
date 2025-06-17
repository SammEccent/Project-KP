<?php
// Definisi route aplikasi menggunakan FastRoute
require_once __DIR__ . '/../vendor/autoload.php';

use FastRoute\RouteCollector;

$dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $r) {
    // Beranda
    $r->addRoute('GET', '/', '../app/Views/beranda.php');
    $r->addRoute('GET', '/beranda', '../app/Views/beranda.php');

    // Profil
    $r->addRoute('GET', '/profil/sejarah', '../app/Views/profile/sejarah.php');
    $r->addRoute('GET', '/profil/struktur', '../app/Views/profile/struktur.php');
    $r->addRoute('GET', '/profil/visi-misi', '../app/Views/profile/visi-misi.php');
    $r->addRoute('GET', '/profil/tugas', '../app/Views/profile/tugas.php');

    // Fasilitas
    $r->addRoute('GET', '/fasilitas/kesehatan', '../app/Views/fasilitas/kesehatan.php');
    $r->addRoute('GET', '/fasilitas/pendidikan', '../app/Views/fasilitas/pendidikan.php');
    $r->addRoute('GET', '/fasilitas/ibadah', '../app/Views/fasilitas/ibadah.php');
    $r->addRoute('GET', '/fasilitas/balai', '../app/Views/fasilitas/balai.php');

    // Pelayanan
    $r->addRoute('GET', '/pelayanan/kk', '../app/Views/pelayanan/kk.php');
    $r->addRoute('GET', '/pelayanan/ktp', '../app/Views/pelayanan/ktp.php');
    $r->addRoute('GET', '/pelayanan/kia', '../app/Views/pelayanan/kia.php');
    $r->addRoute('GET', '/pelayanan/akta-lahir', '../app/Views/pelayanan/akta-lahir.php');
    $r->addRoute('GET', '/pelayanan/akta-kematian', '../app/Views/pelayanan/akta-kematian.php');
    $r->addRoute('GET', '/pelayanan/akta-nikah', '../app/Views/pelayanan/akta-nikah.php');
    $r->addRoute('GET', '/pelayanan/akta-cerai', '../app/Views/pelayanan/akta-cerai.php');

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
        // Jika file ada, include, jika tidak tampilkan 404
        if (file_exists($handler)) {
            include $handler;
        } else {
            http_response_code(404);
            echo '<h1>404 Not Found</h1>';
        }
        break;
}
