<?php

class visimisiController extends Controller {
    public function index() {
        // Send data to the view if needed
        $data = [
            'title' => 'Visi dan Misi Kelurahan',
            'cssFiles' => [
                'css/style.css',     // Selalu dimuat (untuk reset, font dasar, dll)
                'css/components.css', // Untuk gaya header, footer, navigasi, dll.
                'css/visiMisi.css'
            ],
            //'jsFiles' => [
                //'js/visiMisi.js', // Untuk gaya konten utama halaman ini
            //],
        ];

        // Load the visimisi view
        $this->view('components/header', $data);
        $this->view('profil/visiMisi');
        $this->view('components/footer', $data);
    }
}