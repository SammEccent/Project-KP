<?php

class balaiController extends Controller {
    public function index() {
        // Send data to the view if needed
        $data = [
            'title' => 'Balai Kelurahan',
            'cssFiles' => [
                'css/style.css',     // Selalu dimuat (untuk reset, font dasar, dll)
                'css/components.css', // Untuk gaya header, footer, navigasi, dll.
                'css/fasilitas.css'
            ],
            //'jsFiles' =>[
               // 'js/balai.js', // Untuk gaya konten utama halaman ini
            //],
        ];

        // Load the balai view
        $this->view('components/header', $data);
        $this->view('fasilitas/balai');
        $this->view('components/footer', $data);
    }
}