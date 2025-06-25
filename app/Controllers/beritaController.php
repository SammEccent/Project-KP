<?php
require_once __DIR__ . '/../Models/BeritaModel.php';

class beritaController extends Controller
{
    public function index(){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $newsData = (new BeritaModel())->getLatestNewsPaginated($page);
        $data = [
            'pageTitle' => 'Portal Berita Kelurahan',
            'cssFiles' => [
                'css/style.css',     // Selalu dimuat (untuk reset, font dasar, dll)
                'css/components.css', // Untuk gaya header, footer, navigasi, dll.
                'css/berita.css',       // Untuk gaya konten utama halaman ini
            ],
            'categories' => (new BeritaModel())->getAllCategories(),
            // Berita Utama (Ambil 1 headline)
            'headlineNews' => (new BeritaModel())->getHeadlineNews(1),
        
            // Berita Populer (5 terpopuler dalam 7 hari terakhir)
            'popularNews' => (new BeritaModel())->getPopularNews(4, 7),

            'latestNews' => $newsData['data'],
            'pagination' => [
                'currentPage' => $newsData['current_page'],
                'totalPages' => $newsData['total_pages'],
                'totalItems' => $newsData['total']
        ]
        
        ];
        $this->view('public/components/header', $data);
        $this->view('public/berita', $data);
        $this->view('public/components/footer');
    }

    // details berita
    public function detail($slug) {
        $beritaModel = new BeritaModel();
        
        // Ambil berita beserta kontennya berdasarkan slug
        $berita = $beritaModel->getBeritaWithContent($slug);
        
        if (!$berita) {
            // Jika berita tidak ditemukan, tampilkan halaman 404
            $this->view('public/components/header', ['pageTitle' => 'Berita Tidak Ditemukan']);
            $this->view('public/404');
            return;
        }
        // Ambil kategori berita
        $kategori = $beritaModel->getCategoryById($berita['kategori_id']);
        // Ambil berita terkait (5 berita dari kategori yang sama)
        $relatedNews = $beritaModel->getRelatedNews($berita['kategori_id'], $berita['id'], 5);
        // Update view count
        $beritaModel->incrementViewCount($berita['id']);
        // Siapkan data untuk tampilan
        $data = [
            'pageTitle' => htmlspecialchars($berita['judul']),
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/berita.css',
            ],
            'berita' => $berita,
            'kategori' => $kategori,
            'categories' => $beritaModel->getAllCategories(),
            'relatedNews' => $relatedNews
        ];
        // Tampilkan header, detail berita, dan footer
        $this->view('public/components/header', $data);
        $this->view('public/detailBerita', $data);
        $this->view('public/components/footer');
    }

    public function kategori($slug) {
        $beritaModel = new BeritaModel();
        // Ambil kategori berdasarkan slug
        $kategori = $beritaModel->getCategoryBySlug($slug);
        if (!$kategori) {
            // Jika kategori tidak ditemukan, tampilkan halaman 404
            $this->view('public/components/header', ['pageTitle' => 'Kategori Tidak Ditemukan']);
            $this->view('public/404');
            return;
        }
        // Ambil berita dalam kategori ini
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $newsData = $beritaModel->getNewsByCategoryPaginated($kategori['id'], $page);
        // Siapkan data untuk tampilan
        $data = [
            'pageTitle' => htmlspecialchars($kategori['nama']),
            'cssFiles' => [
                'css/style.css',
                'css/components.css',
                'css/berita.css',
            ],
            'kategori' => $kategori,
            'categories' => $beritaModel->getAllCategories(),
            'news' => $newsData['data'],
            'pagination' => [
                'currentPage' => $newsData['current_page'],
                'totalPages' => $newsData['total_pages'],
                'totalItems' => $newsData['total']
            ]
        ];
        // Tampilkan header, daftar berita dalam kategori, dan footer
        $this->view('public/components/header', $data);
        $this->view('public/beritaKategori', $data);
        $this->view('public/components/footer');
    }
}