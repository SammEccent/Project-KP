<?php
//model
require_once __DIR__ . '/../Models/FasilitasModel.php';

class fasilitasController extends Controller{
    public function pendidikan(){
        $fasilitasModel = new FasilitasModel();
        $data = [
            'pageTitle' => 'Fasilitas Pendidikan',
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/fasilitas.css'
            ],
            'fasilitasPendidikan' => $fasilitasModel->getFasilitasPendidikan()
        ];
        $this->view('public/components/header', $data);
        $this->view('public/fasilitas/pendidikan', $data);
        $this->view('public/components/footer');
    }

    // Fasilitas Kesehatan
    public function kesehatan(){
        $fasilitasModel = new FasilitasModel();
        $data = [
            'pageTitle' => 'Fasilitas Kesehatan',
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/fasilitas.css'
            ],
            'fasilitasKesehatan' => $fasilitasModel->getFasilitasKesehatan()
        ];
        $this->view('components/header', $data);
        $this->view('fasilitas/kesehatan', $data);
        $this->view('components/footer');
    }

    // Fasilitas Ibadah
    public function ibadah(){
        $fasilitasModel = new FasilitasModel();
        $data = [
            'pageTitle' => 'Fasilitas Ibadah',
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/fasilitas.css'
            ],
            'fasilitasIbadah' => $fasilitasModel->getFasilitasIbadah()
        ];
        $this->view('components/header', $data);
        $this->view('fasilitas/ibadah', $data);
        $this->view('components/footer');
    }

    // Fasilitas Balai Warga
    public function balaiWarga(){
        $fasilitasModel = new FasilitasModel();
        $data = [
            'pageTitle' => 'Fasilitas Balai Warga',
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/fasilitas.css'
            ],
            'fasilitasBalaiWarga' => $fasilitasModel->getFasilitasBalaiWarga()
        ];
        $this->view('components/header', $data);
        $this->view('fasilitas/balaiwarga', $data);
        $this->view('components/footer');
    }
}