<?php

class beritaController extends Controller
{
    public function index(){
        $data = [
            'pageTitle' => 'Beranda Kelurahan',
            'cssFiles' => [
                'css/style.css',     // Selalu dimuat (untuk reset, font dasar, dll)
                'css/components.css', // Untuk gaya header, footer, navigasi, dll.
                'css/berita.css',       // Untuk gaya konten utama halaman ini
            ]
        ];
        $this->view('components/header', $data);
        $this->view('berita', $data);
        $this->view('components/footer');
    }
}