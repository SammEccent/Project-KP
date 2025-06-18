<?php

class berandaController extends Controller {
    public function index() {
        // Load the beranda view
        $this->view('components/header');
        $this->view('beranda/index');
        $this->view('components/footer');
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