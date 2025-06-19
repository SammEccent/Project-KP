<?php

class ibadahController extends Controller {
    public function index() {
        // Send data to the view if needed
        $data = [
            'title' => 'Ibadah Kelurahan',
            'cssFiles' => [
                'css/style.css',     // Selalu dimuat (untuk reset, font dasar, dll)
                'css/components.css', // Untuk gaya header, footer, navigasi, dll.
                'css/fasilitas.css'
            ],
            //'jsFiles' =>[
               // 'js/ibadah.js', // Untuk gaya konten utama halaman ini
            //],
        ];

        // Load the ibadah view
        $this->view('components/header', $data);
        $this->view('fasilitas/ibadah');
        $this->view('components/footer', $data);
    }
}