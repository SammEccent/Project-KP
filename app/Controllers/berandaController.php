<?php

class berandaController extends Controller {
    public function index() {
        // Load the beranda view
        $this->view('beranda/index');
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