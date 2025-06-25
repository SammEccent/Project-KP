<?php

class pelayananController extends Controller {

    // Halaman utama pelayanan
    public function index() {
        $data = [
            'pageTitle' => 'Layanan Masyarakat - Kelurahan',
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/pelayanan.css'
            ]
        ];

        $this->view('public/components/header', $data);
        $this->view('public/pelayanan/index');
        $this->view('public/components/footer');
    }

    // KTP
    public function ktp() {
        $data = [
            'pageTitle' => 'Pembuatan KTP - Layanan Masyarakat',
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/pelayanan.css'
            ]
        ];

        $this->view('public/components/header', $data);
        $this->view('public/pelayanan/ktp');
        $this->view('public/components/footer');
    }

    // Kartu Keluarga
    public function kk() {
        $data = [
            'pageTitle' => 'Pembuatan Kartu Keluarga - Layanan Masyarakat',
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/pelayanan.css'
            ]
        ];

        $this->view('public/components/header', $data);
        $this->view('public/pelayanan/kk');
        $this->view('public/components/footer');
    }

    // KIA
    public function kia() {
        $data = [
            'pageTitle' => 'Pembuatan KIA - Layanan Masyarakat',
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/pelayanan.css'
            ]
        ];

        $this->view('public/components/header', $data);
        $this->view('public/pelayanan/kia');
        $this->view('public/components/footer');
    }

    // Akta Lahir
    public function aktaLahir() {
        $data = [
            'pageTitle' => 'Pembuatan Akta Kelahiran - Layanan Masyarakat',
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/pelayanan.css'
            ]
        ];

        $this->view('public/components/header', $data);
        $this->view('public/pelayanan/akta-lahir');
        $this->view('public/components/footer');
    }

    // Akta Kematian
    public function aktaKematian() {
        $data = [
            'pageTitle' => 'Pembuatan Akta Kematian - Layanan Masyarakat',
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/pelayanan.css'
            ]
        ];

        $this->view('public/components/header', $data);
        $this->view('public/pelayanan/akta-kematian');
        $this->view('public/components/footer');
    }

    // Akta Nikah
    public function aktaNikah() {
        $data = [
            'pageTitle' => 'Pembuatan Akta Nikah - Layanan Masyarakat',
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/pelayanan.css'
            ]
        ];

        $this->view('public/components/header', $data);
        $this->view('public/pelayanan/akta-nikah');
        $this->view('public/components/footer');
    }

    // Akta Cerai
    public function aktaCerai() {
        $data = [
            'pageTitle' => 'Pembuatan Akta Perceraian - Layanan Masyarakat',
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/pelayanan.css'
            ]
        ];

        $this->view('public/components/header', $data);
        $this->view('public/pelayanan/akta-cerai');
        $this->view('public/components/footer');
    }

    // Form pengajuan
    public function form($jenis = '') {
        $data = [
            'pageTitle' => 'Form Pengajuan ' . ucfirst($jenis) . ' - Layanan Masyarakat',
            'jenisLayanan' => $jenis,
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/pelayanan.css'
            ]
        ];

        $this->view('public/components/header', $data);
        $this->view('public/pelayanan/form', $data);
        $this->view('public/components/footer');
    }

    // Proses pengajuan
    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validasi input
            $jenisLayanan = $_POST['jenis_layanan'] ?? '';
            $nama = $_POST['nama'] ?? '';
            $nik = $_POST['nik'] ?? '';
            $alamat = $_POST['alamat'] ?? '';
            
            // Validasi dasar
            if (empty($nama) || empty($nik) || empty($alamat)) {
                $this->setFlashMessage('error', 'Semua field harus diisi!');
                header('Location: ' . BASE_URL . '/pelayanan/form/' . $jenisLayanan);
                exit;
            }

            // Simpan data pengajuan (implementasi database bisa ditambahkan di sini)
            $pengajuanData = [
                'jenis_layanan' => $jenisLayanan,
                'nama' => $nama,
                'nik' => $nik,
                'alamat' => $alamat,
                'tanggal_pengajuan' => date('Y-m-d H:i:s'),
                'status' => 'pending'
            ];

            // Untuk sementara, simpan ke session
            if (!isset($_SESSION['pengajuan'])) {
                $_SESSION['pengajuan'] = [];
            }
            $_SESSION['pengajuan'][] = $pengajuanData;

            $this->setFlashMessage('success', 'Pengajuan berhasil dikirim! Kami akan menghubungi Anda segera.');
            header('Location: ' . BASE_URL . '/pelayanan/tracking');
            exit;
        }
    }

    // Tracking pengajuan
    public function tracking() {
        $data = [
            'pageTitle' => 'Tracking Pengajuan - Layanan Masyarakat',
            'pengajuan' => $_SESSION['pengajuan'] ?? [],
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/pelayanan.css'
            ]
        ];

        $this->view('components/header', $data);
        $this->view('pelayanan/tracking', $data);
        $this->view('components/footer');
    }

    // Helper method untuk flash message
    private function setFlashMessage($type, $message) {
        if (!isset($_SESSION['flash_messages'])) {
            $_SESSION['flash_messages'] = [];
        }
        $_SESSION['flash_messages'][$type] = $message;
    }
} 