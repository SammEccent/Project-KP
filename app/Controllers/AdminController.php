<?php
class AdminController extends Controller {
    public function dashboard() {
        $this->view('admin/dashboard');
    }
    public function strukturOrganisasi() {
        $this->view('admin/strukturOrganisasi');
    }
    public function fasilitas() {
        $this->view('admin/fasilitas');
    }
    public function berita() {
        $this->view('admin/berita');
    }
    public function index() {
        $this->view('admin/dashboard');
    }
} 