<?php
class BeritaModel {
    private $db;

    public function __construct() {
        $this->db = new Database(); // Sesuaikan dengan konfigurasi Anda
    }

    // Untuk Kategori Berita
    public function getAllCategories() {
        $this->db->prepare("SELECT * FROM kategori ORDER BY nama ASC");
        return $this->db->fetchAll();
    }

    public function getCategoryBySlug($slug) {
        $this->db->prepare("SELECT * FROM kategori WHERE slug = :slug");
        $this->db->bind(':slug', $slug);
        return $this->db->fetch();
    }

    public function getCategoryById($id) {
        $this->db->prepare("SELECT * FROM kategori WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->fetch();
    }

    // Untuk Berita Utama (Headline)
    public function getHeadlineNews() {
        $this->db->prepare("SELECT b.*, k.nama AS kategori_nama, a.nama_lengkap AS penulis 
                       FROM berita b
                       JOIN kategori k ON b.kategori_id = k.id
                       JOIN admin a ON b.admin_id = a.id
                       WHERE b.is_headline = 1
                       ORDER BY b.tanggal_publish DESC
                       LIMIT 1");
    $berita = $this->db->fetch();
    
    if ($berita) {
        // Kemudian ambil gambar utama dari berita_content
        $this->db->prepare("SELECT content FROM berita_content 
                           WHERE berita_id = :berita_id AND content_type = 'image'
                           ORDER BY ordering ASC 
                           LIMIT 1");
        $this->db->bind(':berita_id', $berita['id']);
        $gambar = $this->db->fetch();
        
        // Gabungkan hasil query
        $berita['gambar'] = $gambar ? $gambar['content'] : 'default.jpg';
    }
    
    return $berita;
}

    // Untuk Berita Populer
    public function getPopularNews($limit = 4, $days = 7) {
        $this->db->prepare("SELECT b.id, b.judul, b.slug, b.tanggal_publish, 
                            bc.content AS gambar, k.nama AS kategori_nama
                            FROM berita b
                            LEFT JOIN berita_content bc ON (bc.berita_id = b.id AND bc.content_type = 'image')
                            LEFT JOIN kategori k ON b.kategori_id = k.id
                            WHERE b.tanggal_publish >= DATE_SUB(NOW(), INTERVAL :days DAY)
                            ORDER BY b.view_count DESC, b.tanggal_publish DESC
                            LIMIT :limit");
        $this->db->bind(':limit', (int)$limit, PDO::PARAM_INT);
        $this->db->bind(':days', (int)$days, PDO::PARAM_INT);
        return $this->db->fetchAll();
    }
    

    // Untuk Berita Terkini
    public function getLatestNewsPaginated($page = 1, $perPage = 6) {
        // Hitung offset
        $offset = ($page - 1) * $perPage;
        
        $this->db->prepare("SELECT SQL_CALC_FOUND_ROWS b.id, b.judul, b.slug, b.tanggal_publish, 
                            b.isi_pendek, b.view_count,
                            bc.content AS gambar, k.nama AS kategori_nama
                            FROM berita b
                            LEFT JOIN berita_content bc ON (bc.berita_id = b.id AND bc.content_type = 'image')
                            LEFT JOIN kategori k ON b.kategori_id = k.id
                            ORDER BY b.tanggal_publish DESC
                            LIMIT :offset, :perPage");
        $this->db->bind(':offset', (int)$offset, PDO::PARAM_INT);
        $this->db->bind(':perPage', (int)$perPage, PDO::PARAM_INT);
        $news = $this->db->fetchAll();
        
        // Hitung total rows
        $this->db->prepare("SELECT FOUND_ROWS() AS total");
        $total = $this->db->fetch()['total'];
        
        return [
            'data' => $news,
            'total' => $total,
            'current_page' => $page,
            'per_page' => $perPage,
            'total_pages' => ceil($total / $perPage)
        ];
    }
    

    // Untuk mendapatkan berita by slug
    public function getNewsWithContent($slug) {
        $this->db->prepare("SELECT b.*, k.nama AS kategori_nama, 
                           a.nama_lengkap AS penulis
                           FROM berita b
                           JOIN kategori k ON b.kategori_id = k.id
                           JOIN admin a ON b.admin_id = a.id
                           WHERE b.slug = :slug");
        $this->db->bind(':slug', $slug);
        $berita = $this->db->fetch();
        
        if ($berita) {
            // Ambil semua konten berita (text, gambar, dll)
            $this->db->prepare("SELECT * FROM berita_content 
                              WHERE berita_id = :berita_id
                              ORDER BY ordering ASC");
            $this->db->bind(':berita_id', $berita['id']);
            $berita['contents'] = $this->db->fetchAll();
            
            // Ambil gambar utama (jika ada)
            $this->db->prepare("SELECT content FROM berita_content 
                              WHERE berita_id = :berita_id 
                              AND content_type = 'image'
                              ORDER BY ordering ASC
                              LIMIT 1");
            $this->db->bind(':berita_id', $berita['id']);
            $gambar = $this->db->fetch();
            
            $berita['gambar'] = $gambar ? $gambar['content'] : 'default.jpg';
        }
        
        return $berita;
    }

    // Untuk update view count
    public function incrementViewCount($id) {
        $this->db->prepare("UPDATE berita SET view_count = view_count + 1 WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

    // Untuk berita terkait (dalam kategori yang sama)
    public function getRelatedNews($kategori_id, $current_news_id, $limit = 4) {
        $this->db->prepare("SELECT b.id, b.judul, b.slug, b.isi_pendek, b.tanggal_publish,
                          k.nama AS kategori_nama
                          FROM berita b
                          JOIN kategori k ON b.kategori_id = k.id
                          WHERE b.kategori_id = :kategori_id AND b.id != :current_news_id
                          ORDER BY b.tanggal_publish DESC
                          LIMIT :limit");
        $this->db->bind(':kategori_id', $kategori_id);
        $this->db->bind(':current_news_id', $current_news_id);
        $this->db->bind(':limit', (int)$limit, PDO::PARAM_INT);
        return $this->db->fetchAll();
    }

    // Untuk berita dengan konten (duplikasi kode dihilangkan, menggunakan fungsi yang sama)
    public function getBeritaWithContent($slug) {
        // Alias dari getNewsWithContent untuk kompatibilitas lama
        return $this->getNewsWithContent($slug);
    }
    
    public function getNewsByCategoryPaginated($kategori_id, $page = 1, $perPage = 6) {
        $offset = ($page - 1) * $perPage;
        $this->db->prepare("SELECT SQL_CALC_FOUND_ROWS b.*, k.nama AS kategori_nama, k.slug AS kategori_slug
                            FROM berita b
                            JOIN kategori k ON b.kategori_id = k.id
                            WHERE b.kategori_id = :kategori_id
                            ORDER BY b.tanggal_publish DESC
                            LIMIT :offset, :perPage");
        $this->db->bind(':kategori_id', $kategori_id);
        $this->db->bind(':offset', (int)$offset, PDO::PARAM_INT);
        $this->db->bind(':perPage', (int)$perPage, PDO::PARAM_INT);
        $news = $this->db->fetchAll();

        // Ambil gambar utama untuk setiap berita
        foreach ($news as &$item) {
            $this->db->prepare("SELECT content FROM berita_content WHERE berita_id = :berita_id AND content_type = 'image' ORDER BY ordering ASC LIMIT 1");
            $this->db->bind(':berita_id', $item['id']);
            $gambar = $this->db->fetch();
            if ($gambar && !empty($gambar['content'])) {
                // Jika sudah mengandung img/ di depannya, jangan tambahkan lagi
                if (strpos($gambar['content'], 'img/') === 0) {
                    $item['gambar'] = $gambar['content'];
                } else {
                    $item['gambar'] = 'img/berita/' . $gambar['content'];
                }
            } else {
                $item['gambar'] = 'img/berita/default.jpg';
            }
        }

        $this->db->prepare("SELECT FOUND_ROWS() AS total");
        $total = $this->db->fetch()['total'];

        return [
            'data' => $news,
            'total' => $total,
            'current_page' => $page,
            'per_page' => $perPage,
            'total_pages' => ceil($total / $perPage)
        ];
    }
}
