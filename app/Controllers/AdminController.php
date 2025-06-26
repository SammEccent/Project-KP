<?php
require_once '../app/Models/StrukturOrganisasi.php';
class AdminController extends Controller {
    private $userModel;
    public function __construct() {
        $this->userModel = $this->model('UserModel');
    }
    public function dashboard() {
        $this->requireLogin();
        // Struktur Organisasi
        $strukturModel = new StrukturOrganisasi();
        $allStruktur = $strukturModel->getAll();
        $totalStruktur = is_array($allStruktur) ? count($allStruktur) : 0;

        // Fasilitas
        $totalFasilitas = 0;
        require_once '../app/Core/Database.php';
        $db = new \Database();
        $db->prepare('SELECT COUNT(*) as total FROM fasilitas');
        $result = $db->fetch();
        if ($result && isset($result['total'])) {
            $totalFasilitas = $result['total'];
        }

        // Berita
        require_once '../app/Models/BeritaModel.php';
        $beritaModel = new BeritaModel();
        $totalBerita = $beritaModel->countTotalNews();

        $data = [
            'pageTitle' => 'Admin Dashboard',
            'cssFiles' => [
                'css/admin.css'
            ],
            'totalStruktur' => $totalStruktur,
            'totalFasilitas' => $totalFasilitas,
            'totalBerita' => $totalBerita
        ];
        $this->view('admin/dashboard', $data);
    }
    public function strukturOrganisasi() {
        $this->requireLogin();
        require_once '../app/Models/StrukturOrganisasi.php';
        require_once '../app/Models/JabatanModel.php';
        require_once '../app/Models/AnggotaModel.php';
        $strukturModel = new StrukturOrganisasi();
        $jabatanModel = new JabatanModel();
        $anggotaModel = new AnggotaModel();
        $allStruktur = $strukturModel->getAll();
        $allJabatan = $jabatanModel->getAll();
        $allAnggota = $anggotaModel->getAll();
        $data = [
            'pageTitle' => 'Admin - Struktur Organisasi',
            'cssFiles' => [
                'css/admin.css'
            ],
            'struktur' => $allStruktur,
            'jabatan' => $allJabatan,
            'anggota' => $allAnggota
        ];
        $this->view('admin/strukturOrganisasi', $data);
    }
    public function strukturOrganisasiSave() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once '../app/Models/StrukturOrganisasi.php';
            $strukturModel = new StrukturOrganisasi();
            $id = $_POST['id'] ?? '';
            $jabatan_id = $_POST['jabatan'] ?? '';
            $anggota_id = $_POST['anggota'] ?? '';
            $atasan_id = $_POST['parent_id'] ?? null;
            $urutan = $_POST['urutan'] ?? 1;
            
            if (empty($jabatan_id) || empty($anggota_id) || empty($urutan)) {
                $this->setFlashMessage('error', 'Semua field wajib diisi!');
                header('Location: ' . BASE_URL . '/admin/strukturOrganisasi');
                exit;
            }
            
            $data = [
                'jabatan_id' => $jabatan_id,
                'anggota_id' => $anggota_id,
                'atasan_id' => $atasan_id ?: null,
                'urutan' => $urutan
            ];
            
            if (empty($id)) {
                $strukturModel->create($data);
                $this->setFlashMessage('success', 'Data struktur organisasi berhasil ditambahkan!');
            } else {
                $strukturModel->update($id, $data);
                $this->setFlashMessage('success', 'Data struktur organisasi berhasil diperbarui!');
            }
            header('Location: ' . BASE_URL . '/admin/strukturOrganisasi');
            exit;
        }
    }
    public function strukturOrganisasiDelete($id) {
        require_once '../app/Models/StrukturOrganisasi.php';
        $strukturModel = new StrukturOrganisasi();
        $adaAnak = $strukturModel->getByAtasanId($id);
        if ($adaAnak) {
            $this->setFlashMessage('error', 'Tidak bisa menghapus data karena masih menjadi atasan dari struktur lain!');
            header('Location: ' . BASE_URL . '/admin/strukturOrganisasi');
            exit;
        }
        $strukturModel->delete($id);
        $this->setFlashMessage('success', 'Data struktur organisasi berhasil dihapus!');
        header('Location: ' . BASE_URL . '/admin/strukturOrganisasi');
        exit;
    }
    public function fasilitas() {
        $this->requireLogin();
        require_once '../app/Models/FasilitasModel.php';
        $fasilitasModel = new FasilitasModel();
        $allFasilitas = $fasilitasModel->getAllFasilitas();
        $allJenis = $fasilitasModel->getAllJenis();
        $data = [
            'pageTitle' => 'Admin - Fasilitas',
            'cssFiles' => [
                'css/admin.css'
            ],
            'fasilitas' => $allFasilitas,
            'jenis' => $allJenis
        ];
        $this->view('admin/fasilitas', $data);
    }
    public function fasilitasSave() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once '../app/Models/FasilitasModel.php';
            $fasilitasModel = new FasilitasModel();
            $id = $_POST['id'] ?? '';
            $nama = $_POST['nama_fasilitas'] ?? '';
            $jenis = $_POST['jenis'] ?? '';
            $alamat = $_POST['alamat'] ?? '';
            $deskripsi = $_POST['deskripsi'] ?? '';
            $kontak = $_POST['kontak'] ?? '';
            $link_map = $_POST['link_map'] ?? '';
            $admin_id = $_SESSION['admin_id'] ?? 1;
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $nama)));

            // Validasi
            if (empty($nama) || empty($jenis) || empty($alamat) || empty($link_map)) {
                $this->setFlashMessage('error', 'Nama, jenis, alamat, dan link map wajib diisi!');
                header('Location: ' . BASE_URL . '/admin/fasilitas');
                exit;
            }

            if (empty($id)) {
                // Insert baru
                $fasilitasModel->insertFasilitas([
                    'nama' => $nama,
                    'slug' => $slug,
                    'jenis_id' => $jenis,
                    'alamat' => $alamat,
                    'kontak' => $kontak,
                    'link_map' => $link_map,
                    'deskripsi' => $deskripsi,
                    'admin_id' => $admin_id
                ]);
                $this->setFlashMessage('success', 'Fasilitas berhasil ditambahkan!');
            } else {
                // Update
                $fasilitasModel->updateFasilitas($id, [
                    'nama' => $nama,
                    'slug' => $slug,
                    'jenis_id' => $jenis,
                    'alamat' => $alamat,
                    'kontak' => $kontak,
                    'link_map' => $link_map,
                    'deskripsi' => $deskripsi,
                    'admin_id' => $admin_id
                ]);
                $this->setFlashMessage('success', 'Fasilitas berhasil diperbarui!');
            }
            header('Location: ' . BASE_URL . '/admin/fasilitas');
            exit;
        }
    }
    public function fasilitasDelete($id) {
        require_once '../app/Models/FasilitasModel.php';
        $fasilitasModel = new FasilitasModel();
        $fasilitasModel->deleteFasilitas($id);
        $this->setFlashMessage('success', 'Fasilitas berhasil dihapus!');
        header('Location: ' . BASE_URL . '/admin/fasilitas');
        exit;
    }
    public function berita() {
        $this->requireLogin();
        require_once '../app/Models/BeritaModel.php';
        $beritaModel = new BeritaModel();
        // Ambil semua berita (tanpa paginasi, untuk admin)
        $allNews = $beritaModel->getLatestNewsPaginated(1, 100); // 100 berita per halaman, bisa diubah
        $categories = $beritaModel->getAllCategories();
        $data = [
            'pageTitle' => 'Admin - Berita',
            'cssFiles' => [
                'css/admin.css'
            ],
            'berita' => $allNews['data'],
            'categories' => $categories
        ];
        $this->view('admin/berita', $data);
    }
    public function beritaSave() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once '../app/Models/BeritaModel.php';
            $beritaModel = new BeritaModel();
            $id = $_POST['id'] ?? '';
            $judul = $_POST['judul'] ?? '';
            $kategori = $_POST['kategori'] ?? '';
            $ringkasan = $_POST['ringkasan'] ?? '';
            $isi = $_POST['isi'] ?? '';
            $status = $_POST['status'] ?? 'draft';
            $is_headline = 0;
            $admin_id = $_SESSION['admin_id'] ?? 1;
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $judul)));
            $tanggal_publish = date('Y-m-d H:i:s');

            // Validasi
            if (empty($judul) || empty($kategori) || empty($ringkasan) || empty($isi)) {
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

            if (empty($id)) {
                // Insert baru
                $berita_id = $beritaModel->insertBerita([
                    'slug' => $slug,
                    'judul' => $judul,
                    'isi_pendek' => $ringkasan,
                    'kategori_id' => $kategori,
                    'admin_id' => $admin_id,
                    'status' => $status,
                    'tanggal_publish' => $tanggal_publish,
                    'is_headline' => $is_headline
                ]);
                // Insert isi utama ke berita_content
                $beritaModel->insertBeritaContent($berita_id, 'text', $isi, 1, null);
                // Insert gambar jika ada
                if ($gambar) {
                    $beritaModel->insertBeritaContent($berita_id, 'image', $gambar, 2, null);
                }
                $this->setFlashMessage('success', 'Berita berhasil ditambahkan!');
            } else {
                // Update berita
                $beritaModel->updateBerita($id, [
                    'slug' => $slug,
                    'judul' => $judul,
                    'isi_pendek' => $ringkasan,
                    'kategori_id' => $kategori,
                    'status' => $status,
                    'tanggal_publish' => $tanggal_publish,
                    'is_headline' => $is_headline
                ]);
                // Hapus konten lama, insert baru
                $beritaModel->deleteBeritaContent($id);
                $beritaModel->insertBeritaContent($id, 'text', $isi, 1, null);
                if ($gambar) {
                    $beritaModel->insertBeritaContent($id, 'image', $gambar, 2, null);
                }
                $this->setFlashMessage('success', 'Berita berhasil diperbarui!');
            }
            header('Location: ' . BASE_URL . '/admin/berita');
            exit;
        }
    }
    public function beritaDelete($id) {
        require_once '../app/Models/BeritaModel.php';
        $beritaModel = new BeritaModel();
        // Hapus konten berita_content dulu
        $beritaModel->deleteBeritaContent($id);
        // Hapus berita utama
        $beritaModel->deleteBerita($id);
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
    // Login
    public function login() {
        // Jika sudah login, redirect ke dashboard
        if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
            header('Location: ' . BASE_URL . '/admin/dashboard');
            exit;
        }
        
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            // Username dan password bisa Anda ganti sesuai kebutuhan
            $validUser = 'admin';
            $validPass = 'admin123';

            // jgn di hapus, ini dari db
            //$user = $this->userModel->getUserByUsername($username);
            //if ($user && password_verify($password, $user['pass_hash'])) {
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
            // Set session variables
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_username'] = $username;
                $_SESSION['admin_id'] = 1; // Sementara hardcode, seharusnya dari DB
                
                // Redirect to dashboard
                header('Location: ' . BASE_URL . '/admin/dashboard');
                exit;
            } else {
                $error = 'Username atau password salah!';
            }
        }
        $data = [
            'error' => $error
        ];
        $this->view('admin/login', $data);
    }

    // Logout
    public function logout() {
        session_unset();
        session_destroy();
        header('Location: ' . BASE_URL . '/');
        exit;
    }

    // Proteksi halaman admin
    private function requireLogin() {
        if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
            header('Location: ' . BASE_URL . '/admin/login');
            exit;
        }
    }

    public function anggota() {
        $this->requireLogin();
        require_once '../app/Models/AnggotaModel.php';
        $anggotaModel = new AnggotaModel();
        $allAnggota = $anggotaModel->getAll();
        
        $data = [
            'pageTitle' => 'Admin - Data Anggota',
            'cssFiles' => [
                'css/admin.css'
            ],
            'anggota' => $allAnggota
        ];
        $this->view('admin/anggota', $data);
    }
    
    public function anggotaSave() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once '../app/Models/AnggotaModel.php';
            $anggotaModel = new AnggotaModel();
            
            $id = $_POST['id'] ?? '';
            $nama = $_POST['nama'] ?? '';
            $kontak = $_POST['kontak'] ?? '';
            $bio = $_POST['bio'] ?? '';
            
            if (empty($nama)) {
                $this->setFlashMessage('error', 'Nama wajib diisi!');
                header('Location: ' . BASE_URL . '/admin/anggota');
                exit;
            }
            
            // Handle file upload
            $foto = '';
            if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = '../public/img/struktur/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                
                $fileExtension = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
                $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
                
                if (!in_array($fileExtension, $allowedExtensions)) {
                    $this->setFlashMessage('error', 'Format file tidak didukung! Gunakan JPG, PNG, atau GIF.');
                    header('Location: ' . BASE_URL . '/admin/anggota');
                    exit;
                }
                
                if ($_FILES['foto']['size'] > 2 * 1024 * 1024) { // 2MB
                    $this->setFlashMessage('error', 'Ukuran file terlalu besar! Maksimal 2MB.');
                    header('Location: ' . BASE_URL . '/admin/anggota');
                    exit;
                }
                
                $fileName = 'anggota_' . time() . '.' . $fileExtension;
                $uploadPath = $uploadDir . $fileName;
                
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadPath)) {
                    $foto = 'img/struktur/' . $fileName;
                } else {
                    $this->setFlashMessage('error', 'Gagal mengupload file!');
                    header('Location: ' . BASE_URL . '/admin/anggota');
                    exit;
                }
            }
            
            $data = [
                'nama' => $nama,
                'kontak' => $kontak,
                'bio' => $bio,
                'status' => 'active'
            ];
            
            // Tambahkan foto ke data jika ada upload
            if (!empty($foto)) {
                $data['foto'] = $foto;
            }
            
            if (empty($id)) {
                $anggotaModel->create($data);
                $this->setFlashMessage('success', 'Data anggota berhasil ditambahkan!');
            } else {
                // Jika edit dan tidak ada foto baru, jangan update foto
                if (empty($foto)) {
                    unset($data['foto']);
                }
                $anggotaModel->update($id, $data);
                $this->setFlashMessage('success', 'Data anggota berhasil diperbarui!');
            }
            header('Location: ' . BASE_URL . '/admin/anggota');
            exit;
        }
    }
    
    public function anggotaDelete($id) {
        require_once '../app/Models/StrukturOrganisasi.php';
        $strukturModel = new StrukturOrganisasi();
        $dipakai = $strukturModel->getByAnggotaId($id);
        if ($dipakai) {
            $this->setFlashMessage('error', 'Tidak bisa menghapus anggota karena masih digunakan di struktur organisasi!');
            header('Location: ' . BASE_URL . '/admin/anggota');
            exit;
        }
        require_once '../app/Models/AnggotaModel.php';
        $anggotaModel = new AnggotaModel();
        $anggotaModel->delete($id);
        $this->setFlashMessage('success', 'Data anggota berhasil dihapus!');
        header('Location: ' . BASE_URL . '/admin/anggota');
        exit;
    }
}