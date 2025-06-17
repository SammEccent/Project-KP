<?php

namespace App\Controllers;

class VisiMisiController {
    public function index() {
        return [
            'view' => 'profil/visi-misi/index',
            'data' => [
                'page_title' => 'Visi & Misi Kelurahan'
            ]
        ];
    }
} 