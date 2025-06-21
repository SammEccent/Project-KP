<?php

class pendidikanController extends Controller{
    public function index(){
        // Send data to the view if needed
        $data = [
            'title' => 'Pendidikan Kelurahan',
            'cssFiles' => [
                'css/style.css',     // Selalu dimuat (untuk reset, font dasar, dll)
                'css/components.css', // Untuk gaya header, footer, navigasi, dll.
                'css/fasilitas.css'
            ],
            //'jsFiles' =>[
               // 'js/pendidikan.js', // Untuk gaya konten utama halaman ini
            //],
        ];

        // Load the pendidikan view
        $this->view('public/components/header',$data);
        $this->view('public/fasilitas/pendidikan');
        $this->view('public/components/footer', $data);
    }
}