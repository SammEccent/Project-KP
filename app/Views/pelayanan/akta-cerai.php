<?php require_once __DIR__ . '/../components/navbar.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Pembuatan Akta Perceraian</h1>
                    
                    <!-- Pengertian -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Pengertian</h2>
                        <p class="text-justify">
                            Akta Perceraian adalah bukti sah pencatatan perceraian yang diterbitkan oleh Pengadilan Agama (untuk pernikahan yang dilaksanakan menurut hukum Islam) atau Pengadilan Negeri (untuk pernikahan yang dilaksanakan menurut hukum lainnya). Dokumen ini merupakan bukti resmi yang menyatakan bahwa perceraian telah dicatatkan secara hukum.
                        </p>
                    </section>

                    <!-- Persyaratan -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Persyaratan</h2>
                        <div class="alert alert-info">
                            <h3 class="h5 mb-3">Dokumen yang Diperlukan:</h3>
                            <ol class="mb-0">
                                <li>Surat Pengantar RT/RW</li>
                                <li>Putusan Pengadilan yang telah berkekuatan hukum tetap</li>
                                <li>KTP Suami dan Istri</li>
                                <li>Kartu Keluarga (KK)</li>
                                <li>Akta Nikah</li>
                                <li>Surat Keterangan Pindah (bagi pendatang)</li>
                                <li>Pas Foto 3x4 (2 lembar) masing-masing</li>
                            </ol>
                        </div>
                    </section>

                    <!-- Download Persyaratan -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Download Persyaratan</h2>
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
                    </section>

                    <!-- Informasi Tambahan -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Informasi Tambahan</h2>
                        <div class="alert alert-warning">
                            <h3 class="h5 mb-3">Catatan Penting:</h3>
                            <ul class="mb-0">
                                <li>Akta Perceraian harus dibuat dalam waktu 30 hari setelah putusan pengadilan berkekuatan hukum tetap</li>
                                <li>Proses pembuatan Akta Perceraian membutuhkan waktu 1-3 hari kerja</li>
                                <li>Biaya pembuatan Akta Perceraian bervariasi sesuai dengan pengadilan setempat</li>
                                <li>Dokumen ini diperlukan untuk pengurusan dokumen kependudukan lainnya</li>
                                <li>Untuk perceraian di luar negeri, diperlukan legalisasi dari KBRI setempat</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Tombol Aksi -->
                    <div class="text-center">
                        <a href="/pelayanan/akta-cerai/form.php" class="btn btn-primary btn-lg">
                            <i class="material-icons">edit_document</i>
                            Ajukan Pembuatan Akta Perceraian
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../components/footer.php'; ?>
