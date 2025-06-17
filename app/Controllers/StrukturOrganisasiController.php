<?php

namespace App\Controllers;

use App\Models\StrukturOrganisasi;

class StrukturOrganisasiController {
    private $model;

    public function __construct() {
        $this->model = new StrukturOrganisasi();
    }

    public function index() {
        $struktur = $this->model->getAll();
        
        return [
            'view' => 'profil/struktur/index',
            'data' => [
                'page_title' => 'Struktur Organisasi Kelurahan',
                'struktur' => $struktur
            ]
        ];
    }
} 