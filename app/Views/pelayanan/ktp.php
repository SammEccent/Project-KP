<?php require_once __DIR__ . '/../components/navbar.php'; ?>

<div class="pelayanan-hero pelayanan-hero-ktp">
    <div class="container text-center">
        <span class="material-icons pelayanan-hero-icon">badge</span>
        <h1 class="pelayanan-title mb-2">Pembuatan KTP</h1>
        <p class="pelayanan-subtitle">Layanan pembuatan dan pengurusan Kartu Tanda Penduduk (KTP) untuk warga yang telah berusia 17 tahun atau sudah menikah.</p>
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
                        Kartu Tanda Penduduk (KTP) adalah identitas resmi penduduk sebagai bukti diri yang diterbitkan oleh Instansi Pelaksana yang berlaku di seluruh wilayah Negara Kesatuan Republik Indonesia. KTP wajib dimiliki oleh setiap penduduk yang telah berusia 17 tahun atau telah menikah.
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
                            <li>Surat Nikah (bagi yang sudah menikah)</li>
                            <li>Surat Pindah (bagi pendatang)</li>
                            <li>Pas Foto 3x4 (2 lembar)</li>
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
                        <a href="/downloads/ktp/surat-pengantar.docx" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>Format Surat Pengantar RT/RW</span>
                            <span class="badge bg-primary rounded-pill">
                                <i class="material-icons">download</i>
                            </span>
                        </a>
                        <a href="/downloads/ktp/checklist-persyaratan.pdf" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
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
                            <li>Proses pembuatan KTP membutuhkan waktu 1-2 hari kerja</li>
                            <li>KTP akan berlaku seumur hidup kecuali ada perubahan data</li>
                            <li>Biaya pembuatan KTP gratis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.pelayanan-hero-ktp .pelayanan-hero-icon {
    font-size: 4rem;
    margin-bottom: 1rem;
    color: #fff;
    background: linear-gradient(135deg, #1976d2, #764ba2);
    border-radius: 50%;
    padding: 0.5rem 0.7rem;
    box-shadow: 0 2px 12px rgba(25, 118, 210, 0.15);
}
.pelayanan-card {
    border-radius: 16px;
    background: #fff;
    border: none;
    transition: box-shadow 0.2s;
    margin-bottom: 1.5rem;
}
.pelayanan-card:hover {
    box-shadow: 0 8px 32px rgba(102,126,234,0.10);
}
.pelayanan-card-header {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 0.5rem;
}
.pelayanan-section-icon {
    font-size: 2rem;
    border-radius: 50%;
    padding: 0.3rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}
.pelayanan-section-title {
    font-size: 1.2rem;
    font-weight: 600;
    margin: 0;
    color: #2c3e50;
}
.pelayanan-card-body {
    font-size: 1rem;
    color: #444;
}
@media (max-width: 768px) {
    .pelayanan-hero-ktp .pelayanan-hero-icon { font-size: 2.5rem; }
    .pelayanan-section-title { font-size: 1rem; }
}
</style>

<?php require_once __DIR__ . '/../components/footer.php'; ?>
