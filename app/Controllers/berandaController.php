<?php
require_once __DIR__ . '/../Models/FasilitasModel.php';

class berandaController extends Controller {
    public function index() {
        // nav menu
        $navMenu = (new FasilitasModel())->getAllJenis();
        // Send data to the view
        $data = [
            'pageTitle' => 'Beranda Kelurahan',
            'cssFiles' => [
                'css/style.css',     // Selalu dimuat (untuk reset, font dasar, dll)
                'css/components.css', // Untuk gaya header, footer, navigasi, dll.
                'css/beranda.css',       // Untuk gaya konten utama halaman ini
            ],
            'jsFiles' => [
                'js/berandaSlideshow.js', // Script khusus untuk halaman beranda
            ],
            'navMenu' => $navMenu,
        ];

        // Load the beranda view
        $this->view('public/components/header', $data);
        $this->view('public/beranda');
        $this->view('public/components/footer');
    }

    public function sambutan() {
        // Load the sambutan view
        $this->view('beranda/sambutan');
    }

    public function layananCepat() {
        // Load the layanan cepat view
        $this->view('beranda/layananCepat');
    }
}