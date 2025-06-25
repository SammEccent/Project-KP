<?php

class sejarahController extends Controller{
    public function index(){
        // Send data to the view if needed
        $data = [
            'title' => 'Sejarah Kelurahan',
            'cssFiles' => [
                'css/style.css',     // Selalu dimuat (untuk reset, font dasar, dll)
                'css/components.css', // Untuk gaya header, footer, navigasi, dll.
                'css/sejarah.css'
            ],
            'jsFiles' =>[
                'js/sejarah.js', // Untuk gaya konten utama halaman ini
            ],
            
        
        ];

        // Load the sejarah view
        $this->view('public/components/header',$data);
        $this->view('public/profil/sejarah');
        $this->view('public/components/footer', $data);
    }
        
}