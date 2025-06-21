<?php
class AdminController extends Controller {
    public function dashboard() {
        $data = [
            'pageTitle' => 'Admin Dashboard',
            'cssFiles' => [
                'css/admin.css'
            ]
        ];
        $this->view('admin/dashboard', $data);
    }
    public function strukturOrganisasi() {
        $data = [
            'pageTitle' => 'Admin - Struktur Organisasi',
            'cssFiles' => [
                'css/admin.css'
            ]
        ];
        $this->view('admin/strukturOrganisasi', $data);
    }
    public function fasilitas() {
        $data = [
            'pageTitle' => 'Admin - Fasilitas',
            'cssFiles' => [
                'css/admin.css'
            ]
        ];
        $this->view('admin/fasilitas', $data);
    }
    public function berita() {
        $data = [
            'pageTitle' => 'Admin - Berita',
            'cssFiles' => [
                'css/admin.css'
            ]
        ];
        $this->view('admin/berita', $data);
    }
    public function index() {
        $this->dashboard();
    }
} 