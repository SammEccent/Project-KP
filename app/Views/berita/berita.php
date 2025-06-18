
<?php
$page_title = "Berita";
require_once __DIR__ . '/../components/navbar.php';
?>

<div class="container py-5">
    <h1 class="text-center mb-5">Berita Kelurahan</h1>

    <!-- Filter dan Pencarian -->
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari berita...">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        <div class="col-md-6">
            <select class="form-select">
                <option value="">Semua Kategori</option>
                <option value="pengumuman">Pengumuman</option>
                <option value="kegiatan">Kegiatan</option>
                <option value="berita">Berita</option>
            </select>
        </div>
    </div>

    <!-- Daftar Berita -->
    <div class="row">
        <!-- Berita 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/sistem_kelurahan_lw/assets/images/berita1.jpg" class="card-img-top" alt="Berita 1">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-primary">Pengumuman</span>
                        <small class="text-muted">15 Juni 2024</small>
                    </div>
                    <h5 class="card-title">Jadwal Vaksinasi COVID-19 Minggu Ini</h5>
                    <p class="card-text">Pemerintah kelurahan mengadakan vaksinasi COVID-19 untuk warga yang belum mendapatkan vaksin...</p>
                    <a href="#" class="btn btn-outline-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Berita 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/sistem_kelurahan_lw/assets/images/berita2.jpg" class="card-img-top" alt="Berita 2">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-success">Kegiatan</span>
                        <small class="text-muted">12 Juni 2024</small>
                    </div>
                    <h5 class="card-title">Gotong Royong Bersih-bersih Lingkungan</h5>
                    <p class="card-text">Warga kelurahan melakukan gotong royong membersihkan lingkungan dalam rangka menjaga kebersihan...</p>
                    <a href="#" class="btn btn-outline-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Berita 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/sistem_kelurahan_lw/assets/images/berita3.jpg" class="card-img-top" alt="Berita 3">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-info">Berita</span>
                        <small class="text-muted">10 Juni 2024</small>
                    </div>
                    <h5 class="card-title">Pembangunan Taman Kelurahan</h5>
                    <p class="card-text">Pembangunan taman kelurahan telah selesai dan akan segera diresmikan untuk digunakan warga...</p>
                    <a href="#" class="btn btn-outline-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation" class="mt-4">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>

<?php require_once __DIR__ . '/../components/footer.php'; ?> 