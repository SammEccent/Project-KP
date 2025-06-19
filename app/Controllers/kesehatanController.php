<?php

class kesehatanController extends Controller {
    public function index() {
        // Send data to the view if needed
        $data = [
            'title' => 'Kesehatan Kelurahan',
            'cssFiles' => [
                'css/style.css',     // Selalu dimuat (untuk reset, font dasar, dll)
                'css/components.css', // Untuk gaya header, footer, navigasi, dll.
                'css/fasilitas.css'
            ],
            //'jsFiles' =>[
               // 'js/kesehatan.js', // Untuk gaya konten utama halaman ini
            //],
        ];

        // Load the kesehatan view
        $this->view('components/header', $data);
        $this->view('fasilitas/kesehatan');
        $this->view('components/footer', $data);
    }
}