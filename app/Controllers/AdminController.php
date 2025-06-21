<?php
class AdminController extends Controller {
    public function dashboard() {
        $data = [
            'pageTitle' => 'Admin Dashboard',
            'cssFiles' => [
                'css/admin.css'
            ]
        ];
        $this->view('admin/dashboard', $data);
    }
    public function strukturOrganisasi() {
        $data = [
            'pageTitle' => 'Admin - Struktur Organisasi',
            'cssFiles' => [
                'css/admin.css'
            ]
        ];
        $this->view('admin/strukturOrganisasi', $data);
    }
    public function strukturOrganisasiSave() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? '';
            $jabatan = $_POST['jabatan'] ?? '';
            $nama_pejabat = $_POST['nama_pejabat'] ?? '';
            $parent_id = $_POST['parent_id'] ?? '';
            $urutan = $_POST['urutan'] ?? '';
            
            // Validasi
            if (empty($jabatan) || empty($nama_pejabat) || empty($urutan)) {
                $this->setFlashMessage('error', 'Semua field wajib diisi!');
                header('Location: ' . BASE_URL . '/admin/strukturOrganisasi');
                exit;
            }
            
            // Handle file upload
            $foto = '';
            if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = '../public/img/struktur/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                
                $fileExtension = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
                $fileName = 'pejabat_' . time() . '.' . $fileExtension;
                $uploadPath = $uploadDir . $fileName;
                
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadPath)) {
                    $foto = 'img/struktur/' . $fileName;
                }
            }
            
            // Simpan ke database (implementasi database bisa ditambahkan di sini)
            $data = [
                'jabatan' => $jabatan,
                'nama_pejabat' => $nama_pejabat,
                'parent_id' => $parent_id,
                'urutan' => $urutan,
                'foto' => $foto
            ];
            
            if (empty($id)) {
                // Insert baru
                $this->setFlashMessage('success', 'Data struktur organisasi berhasil ditambahkan!');
            } else {
                // Update
                $this->setFlashMessage('success', 'Data struktur organisasi berhasil diperbarui!');
            }
            
            header('Location: ' . BASE_URL . '/admin/strukturOrganisasi');
            exit;
        }
    }
    public function strukturOrganisasiDelete($id) {
        // Implementasi delete
        $this->setFlashMessage('success', 'Data struktur organisasi berhasil dihapus!');
        header('Location: ' . BASE_URL . '/admin/strukturOrganisasi');
        exit;
    }
    public function fasilitas() {
        $data = [
            'pageTitle' => 'Admin - Fasilitas',
            'cssFiles' => [
                'css/admin.css'
            ]
        ];
        $this->view('admin/fasilitas', $data);
    }
    public function fasilitasSave() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? '';
            $nama_fasilitas = $_POST['nama_fasilitas'] ?? '';
            $jenis = $_POST['jenis'] ?? '';
            $alamat = $_POST['alamat'] ?? '';
            $deskripsi = $_POST['deskripsi'] ?? '';
            $kontak = $_POST['kontak'] ?? '';
            
            // Validasi
            if (empty($nama_fasilitas) || empty($jenis) || empty($alamat)) {
                $this->setFlashMessage('error', 'Nama fasilitas, kategori, dan alamat wajib diisi!');
                header('Location: ' . BASE_URL . '/admin/fasilitas');
                exit;
            }
            
            // Simpan ke database (implementasi database bisa ditambahkan di sini)
            $data = [
                'nama_fasilitas' => $nama_fasilitas,
                'jenis' => $jenis,
                'alamat' => $alamat,
                'deskripsi' => $deskripsi,
                'kontak' => $kontak
            ];
            
            if (empty($id)) {
                // Insert baru
                $this->setFlashMessage('success', 'Fasilitas berhasil ditambahkan!');
            } else {
                // Update
                $this->setFlashMessage('success', 'Fasilitas berhasil diperbarui!');
            }
            
            header('Location: ' . BASE_URL . '/admin/fasilitas');
            exit;
        }
    }
    public function fasilitasDelete($id) {
        // Implementasi delete
        $this->setFlashMessage('success', 'Fasilitas berhasil dihapus!');
        header('Location: ' . BASE_URL . '/admin/fasilitas');
        exit;
    }
    public function berita() {
        $data = [
            'pageTitle' => 'Admin - Berita',
            'cssFiles' => [
                'css/admin.css'
            ]
        ];
        $this->view('admin/berita', $data);
    }
    public function beritaSave() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? '';
            $judul = $_POST['judul'] ?? '';
            $kategori = $_POST['kategori'] ?? '';
            $ringkasan = $_POST['ringkasan'] ?? '';
            $isi = $_POST['isi'] ?? '';
            $penulis = $_POST['penulis'] ?? '';
            $status = $_POST['status'] ?? 'draft';
            
            // Validasi
            if (empty($judul) || empty($kategori) || empty($ringkasan) || empty($isi) || empty($penulis)) {
                $this->setFlashMessage('error', 'Semua field wajib diisi!');
                header('Location: ' . BASE_URL . '/admin/berita');
                exit;
            }
            
            // Handle file upload
            $gambar = '';
            if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = '../public/img/berita/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                
                $fileExtension = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
                $fileName = 'berita_' . time() . '.' . $fileExtension;
                $uploadPath = $uploadDir . $fileName;
                
                if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadPath)) {
                    $gambar = 'img/berita/' . $fileName;
                }
            }
            
            // Simpan ke database (implementasi database bisa ditambahkan di sini)
            $data = [
                'judul' => $judul,
                'kategori' => $kategori,
                'ringkasan' => $ringkasan,
                'isi' => $isi,
                'penulis' => $penulis,
                'status' => $status,
                'gambar' => $gambar,
                'tanggal_publikasi' => date('Y-m-d H:i:s')
            ];
            
            if (empty($id)) {
                // Insert baru
                $this->setFlashMessage('success', 'Berita berhasil ditambahkan!');
            } else {
                // Update
                $this->setFlashMessage('success', 'Berita berhasil diperbarui!');
            }
            
            header('Location: ' . BASE_URL . '/admin/berita');
            exit;
        }
    }
    public function beritaDelete($id) {
        // Implementasi delete
        $this->setFlashMessage('success', 'Berita berhasil dihapus!');
        header('Location: ' . BASE_URL . '/admin/berita');
        exit;
    }
    public function index() {
        $this->dashboard();
    }
    private function setFlashMessage($type, $message) {
        if (!isset($_SESSION['flash_messages'])) {
            $_SESSION['flash_messages'] = [];
        }
        $_SESSION['flash_messages'][$type] = $message;
    }
} 