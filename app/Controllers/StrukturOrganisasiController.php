<?php

class strukturOrganisasiController extends Controller {
    public function index() {
        // Send data to the view if needed
        $data = [
            'pageTitle' => 'Struktur Organisasi Kelurahan',
            'cssFiles' => [
                'css/style.css',     // Selalu dimuat (untuk reset, font dasar, dll)
                'css/components.css', // Untuk gaya header, footer, navigasi, dll.
                'css/strukturOrganisasi.css'
            ],
            //'jsFiles' => [
                //'js/strukturOrganisasi.js', // Untuk gaya konten utama halaman ini
            //],
        ];

        // Load the strukturOrganisasi view
        $this->view('public/components/header', $data);
        $this->view('public/profil/strukturOrganisasi');
        $this->view('public/components/footer', $data);
    }
}