<?php require_once __DIR__ . '/../components/navbar.php'; ?>

<div class="pelayanan-hero pelayanan-hero-kia">
    <div class="container text-center">
        <span class="material-icons pelayanan-hero-icon">child_care</span>
        <h1 class="pelayanan-title mb-2">Pembuatan Kartu Identitas Anak (KIA)</h1>
        <p class="pelayanan-subtitle">Layanan pembuatan KIA sebagai identitas resmi anak di bawah 17 tahun dan belum menikah.</p>
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
                        Kartu Identitas Anak (KIA) adalah identitas resmi anak yang berlaku sebagai identitas diri anak yang berusia di bawah 17 tahun dan belum menikah. KIA berfungsi sebagai bukti diri anak dan memudahkan anak dalam mengakses layanan publik.
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
                            <li>Kartu Keluarga (KK)</li>
                            <li>Akta Kelahiran Anak</li>
                            <li>KTP Orang Tua/Wali</li>
                            <li>Pas Foto Anak 3x4 (2 lembar)</li>
                            <li>Surat Keterangan Pindah (bagi pendatang)</li>
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
                        <a href="/downloads/kia/surat-pengantar.docx" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>Format Surat Pengantar RT/RW</span>
                            <span class="badge bg-primary rounded-pill">
                                <i class="material-icons">download</i>
                            </span>
                        </a>
                        <a href="/downloads/kia/checklist-persyaratan.pdf" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
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
                            <li>KIA dapat dibuat sejak anak lahir</li>
                            <li>Proses pembuatan KIA membutuhkan waktu 1-2 hari kerja</li>
                            <li>KIA berlaku sampai anak berusia 17 tahun</li>
                            <li>Biaya pembuatan KIA gratis</li>
                            <li>KIA dapat digunakan sebagai pengganti KTP untuk anak di bawah 17 tahun</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.pelayanan-hero-kia .pelayanan-hero-icon {
    font-size: 4rem;
    margin-bottom: 1rem;
    color: #fff;
    background: linear-gradient(135deg, #f7971e, #ffd200);
    border-radius: 50%;
    padding: 0.5rem 0.7rem;
    box-shadow: 0 2px 12px rgba(247, 151, 30, 0.15);
}
</style>

<?php require_once __DIR__ . '/../components/footer.php'; ?>
