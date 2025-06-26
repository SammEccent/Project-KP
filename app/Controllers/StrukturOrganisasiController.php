<?php
require_once '../app/Models/StrukturOrganisasi.php';
class strukturOrganisasiController extends Controller {
    public function index() {
        $strukturModel = new StrukturOrganisasi();
        $struktur = $strukturModel->getAll();
        $data = [
            'pageTitle' => 'Struktur Organisasi Kelurahan',
            'cssFiles' => [
                'css/style.css',     // Selalu dimuat (untuk reset, font dasar, dll)
                'css/components.css', // Untuk gaya header, footer, navigasi, dll.
                'css/strukturOrganisasi.css'
            ],
            'struktur' => $struktur
        ];

        // Load the strukturOrganisasi view
        $this->view('public/components/header', $data);
        $this->view('public/profil/strukturOrganisasi', $data);
        $this->view('public/components/footer');
    }
}