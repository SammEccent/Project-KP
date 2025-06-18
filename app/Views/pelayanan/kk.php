<?php require_once __DIR__ . '/../components/navbar.php'; ?>

<div class="pelayanan-hero pelayanan-hero-kk">
    <div class="container text-center">
        <span class="material-icons pelayanan-hero-icon">family_restroom</span>
        <h1 class="pelayanan-title mb-2">Pembuatan Kartu Keluarga (KK)</h1>
        <p class="pelayanan-subtitle">Layanan pembuatan dan perubahan data Kartu Keluarga untuk mencatat susunan dan hubungan keluarga.</p>
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
                        Kartu Keluarga (KK) adalah dokumen kependudukan yang memuat data tentang susunan, hubungan, dan jumlah anggota keluarga. KK merupakan bukti sah yang menjelaskan hubungan antar anggota keluarga dan menjadi dasar untuk pengurusan dokumen kependudukan lainnya.
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
                            <li>Buku Nikah (bagi yang sudah menikah)</li>
                            <li>Surat Pindah (bagi pendatang)</li>
                            <li>KTP Suami dan Istri</li>
                            <li>Surat Keterangan Pindah (bagi yang pindah dari luar daerah)</li>
                            <li>Surat Keterangan Kematian (jika ada anggota keluarga yang meninggal)</li>
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
                        <a href="/downloads/kk/surat-pengantar.docx" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>Format Surat Pengantar RT/RW</span>
                            <span class="badge bg-primary rounded-pill">
                                <i class="material-icons">download</i>
                            </span>
                        </a>
                        <a href="/downloads/kk/checklist-persyaratan.pdf" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
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
                            <li>Proses pembuatan KK membutuhkan waktu 1-3 hari kerja</li>
                            <li>KK harus diperbarui jika ada perubahan data keluarga</li>
                            <li>Biaya pembuatan KK gratis</li>
                            <li>Setiap keluarga hanya diperbolehkan memiliki 1 KK</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.pelayanan-hero-kk .pelayanan-hero-icon {
    font-size: 4rem;
    margin-bottom: 1rem;
    color: #fff;
    background: linear-gradient(135deg, #43cea2, #185a9d);
    border-radius: 50%;
    padding: 0.5rem 0.7rem;
    box-shadow: 0 2px 12px rgba(67, 206, 162, 0.15);
}
</style>

<?php require_once __DIR__ . '/../components/footer.php'; ?>
