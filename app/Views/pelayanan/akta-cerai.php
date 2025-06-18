<?php require_once __DIR__ . '/../components/navbar.php'; ?>

<div class="pelayanan-hero pelayanan-hero-aktacerai">
    <div class="container text-center">
        <span class="material-icons pelayanan-hero-icon">gavel</span>
        <h1 class="pelayanan-title mb-2">Pembuatan Akta Perceraian</h1>
        <p class="pelayanan-subtitle">Layanan pembuatan akta perceraian sebagai bukti sah pencatatan perceraian.</p>
    </div>
</div>

<div class="container mt-4">
    <div class="row g-4">
        <!-- Pengertian -->
        <div class="col-12">
            <div class="pelayanan-card shadow-sm">
                <div class="pelayanan-card-header">
                    <span class="material-icons pelayanan-section-icon bg-primary text-white">info</span>
                    <h2 class="pelayanan-section-title">Pengertian</h2>
                </div>
                <div class="pelayanan-card-body">
                    <p class="text-justify mb-0">
                        Akta Perceraian adalah bukti sah pencatatan perceraian yang diterbitkan oleh Pengadilan Agama (untuk pernikahan yang dilaksanakan menurut hukum Islam) atau Pengadilan Negeri (untuk pernikahan yang dilaksanakan menurut hukum lainnya). Dokumen ini merupakan bukti resmi yang menyatakan bahwa perceraian telah dicatatkan secara hukum.
                    </p>
                </div>
            </div>
        </div>
        <!-- Persyaratan -->
        <div class="col-12 col-md-6">
            <div class="pelayanan-card shadow-sm">
                <div class="pelayanan-card-header">
                    <span class="material-icons pelayanan-section-icon bg-success text-white">check_circle</span>
                    <h2 class="pelayanan-section-title">Persyaratan</h2>
                </div>
                <div class="pelayanan-card-body">
                    <div class="alert alert-info mb-2">
                        <h3 class="h6 mb-2">Dokumen yang Diperlukan:</h3>
                        <ol class="mb-0 ps-3">
                            <li>Surat Pengantar RT/RW</li>
                            <li>Putusan Pengadilan yang telah berkekuatan hukum tetap</li>
                            <li>KTP Suami dan Istri</li>
                            <li>Kartu Keluarga (KK)</li>
                            <li>Akta Nikah</li>
                            <li>Surat Keterangan Pindah (bagi pendatang)</li>
                            <li>Pas Foto 3x4 (2 lembar) masing-masing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Download Persyaratan -->
        <div class="col-12 col-md-6">
            <div class="pelayanan-card shadow-sm">
                <div class="pelayanan-card-header">
                    <span class="material-icons pelayanan-section-icon bg-warning text-white">download</span>
                    <h2 class="pelayanan-section-title">Download Persyaratan</h2>
                </div>
                <div class="pelayanan-card-body">
                    <div class="list-group">
                        <a href="/downloads/akta-cerai/surat-pengantar.docx" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>Format Surat Pengantar RT/RW</span>
                            <span class="badge bg-primary rounded-pill">
                                <i class="material-icons">download</i>
                            </span>
                        </a>
                        <a href="/downloads/akta-cerai/checklist-persyaratan.pdf" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>Checklist Persyaratan</span>
                            <span class="badge bg-primary rounded-pill">
                                <i class="material-icons">download</i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Informasi Tambahan -->
        <div class="col-12">
            <div class="pelayanan-card shadow-sm">
                <div class="pelayanan-card-header">
                    <span class="material-icons pelayanan-section-icon bg-info text-white">info</span>
                    <h2 class="pelayanan-section-title">Informasi Tambahan</h2>
                </div>
                <div class="pelayanan-card-body">
                    <div class="alert alert-warning mb-0">
                        <h3 class="h6 mb-2">Catatan Penting:</h3>
                        <ul class="mb-0 ps-3">
                            <li>Akta Perceraian harus dibuat dalam waktu 30 hari setelah putusan pengadilan berkekuatan hukum tetap</li>
                            <li>Proses pembuatan Akta Perceraian membutuhkan waktu 1-3 hari kerja</li>
                            <li>Biaya pembuatan Akta Perceraian bervariasi sesuai dengan pengadilan setempat</li>
                            <li>Dokumen ini diperlukan untuk pengurusan dokumen kependudukan lainnya</li>
                            <li>Untuk perceraian di luar negeri, diperlukan legalisasi dari KBRI setempat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.pelayanan-hero-aktacerai .pelayanan-hero-icon {
    font-size: 4rem;
    margin-bottom: 1rem;
    color: #fff;
    background: linear-gradient(135deg, #8e54e9, #4776e6);
    border-radius: 50%;
    padding: 0.5rem 0.7rem;
    box-shadow: 0 2px 12px rgba(142, 84, 233, 0.15);
}
</style>

<?php require_once __DIR__ . '/../components/footer.php'; ?>
