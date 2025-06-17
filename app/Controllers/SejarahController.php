<?php

namespace App\Controllers;

use App\Models\Sejarah;

class SejarahController {
    private $sejarahModel;

    public function __construct() {
        $this->sejarahModel = new Sejarah();
    }

    public function index() {
        $data = [
            'sejarah' => $this->sejarahModel->getAll()
        ];

        return [
            'view' => 'profil/sejarah',
            'data' => $data
        ];
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'tahun' => $_POST['tahun'],
                'judul' => $_POST['judul'],
                'deskripsi' => $_POST['deskripsi']
            ];

            if ($this->sejarahModel->create($data)) {
                $_SESSION['success'] = 'Data sejarah berhasil ditambahkan';
                header('Location: /profil/sejarah');
                exit;
            } else {
                $_SESSION['error'] = 'Gagal menambahkan data sejarah';
                header('Location: /profil/sejarah/create');
                exit;
            }
        }

        return [
            'view' => 'profil/sejarah/create',
            'data' => []
        ];
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'tahun' => $_POST['tahun'],
                'judul' => $_POST['judul'],
                'deskripsi' => $_POST['deskripsi']
            ];

            if ($this->sejarahModel->update($id, $data)) {
                $_SESSION['success'] = 'Data sejarah berhasil diperbarui';
                header('Location: /profil/sejarah');
                exit;
            } else {
                $_SESSION['error'] = 'Gagal memperbarui data sejarah';
                header('Location: /profil/sejarah/edit/' . $id);
                exit;
            }
        }

        $sejarah = $this->sejarahModel->getById($id);
        if (!$sejarah) {
            $_SESSION['error'] = 'Data sejarah tidak ditemukan';
            header('Location: /profil/sejarah');
            exit;
        }

        return [
            'view' => 'profil/sejarah/edit',
            'data' => [
                'sejarah' => $sejarah
            ]
        ];
    }

    public function delete($id) {
        if ($this->sejarahModel->delete($id)) {
            $_SESSION['success'] = 'Data sejarah berhasil dihapus';
        } else {
            $_SESSION['error'] = 'Gagal menghapus data sejarah';
        }
        
        header('Location: /profil/sejarah');
        exit;
    }
} 