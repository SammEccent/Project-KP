<?php require_once __DIR__ . '/../components/navbar.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Pembuatan Akta Nikah</h1>
                    
                    <!-- Pengertian -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Pengertian</h2>
                        <p class="text-justify">
                            Akta Nikah adalah bukti sah pencatatan pernikahan yang diterbitkan oleh Kantor Urusan Agama (KUA) atau Kantor Catatan Sipil. Dokumen ini merupakan bukti resmi yang menyatakan bahwa pernikahan telah dicatatkan secara hukum dan sah menurut agama dan negara.
                        </p>
                    </section>

                    <!-- Persyaratan -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Persyaratan</h2>
                        <div class="alert alert-info">
                            <h3 class="h5 mb-3">Dokumen yang Diperlukan:</h3>
                            <ol class="mb-0">
                                <li>Surat Pengantar RT/RW</li>
                                <li>KTP Calon Suami dan Istri</li>
                                <li>Kartu Keluarga (KK)</li>
                                <li>Surat Keterangan Belum Menikah dari RT/RW</li>
                                <li>Surat Keterangan Status Perkawinan dari KUA</li>
                                <li>Pas Foto 3x4 (2 lembar) masing-masing calon</li>
                                <li>Surat Keterangan Pindah (bagi pendatang)</li>
                            </ol>
                        </div>
                    </section>

                    <!-- Download Persyaratan -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Download Persyaratan</h2>
                        <div class="list-group">
                            <a href="/downloads/akta-nikah/surat-pengantar.docx" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span>Format Surat Pengantar RT/RW</span>
                                <span class="badge bg-primary rounded-pill">
                                    <i class="material-icons">download</i>
                                </span>
                            </a>
                            <a href="/downloads/akta-nikah/checklist-persyaratan.pdf" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
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
                                <li>Proses pembuatan Akta Nikah membutuhkan waktu 1-3 hari kerja</li>
                                <li>Biaya pembuatan Akta Nikah bervariasi sesuai dengan KUA setempat</li>
                                <li>Akta Nikah harus dibuat dalam waktu 60 hari setelah pernikahan</li>
                                <li>Dokumen ini diperlukan untuk pengurusan dokumen kependudukan lainnya</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Tombol Aksi -->
                    <div class="text-center">
                        <a href="/pelayanan/akta-nikah/form.php" class="btn btn-primary btn-lg">
                            <i class="material-icons">edit_document</i>
                            Ajukan Pembuatan Akta Nikah
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../components/footer.php'; ?>
