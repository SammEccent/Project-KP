<?php require_once __DIR__ . '/../components/navbar.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Pembuatan Kartu Keluarga</h1>
                    
                    <!-- Pengertian -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Pengertian</h2>
                        <p class="text-justify">
                            Kartu Keluarga (KK) adalah dokumen kependudukan yang memuat data tentang susunan, hubungan, dan jumlah anggota keluarga. KK merupakan bukti sah yang menjelaskan hubungan antar anggota keluarga dan menjadi dasar untuk pengurusan dokumen kependudukan lainnya.
                        </p>
                    </section>

                    <!-- Persyaratan -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Persyaratan</h2>
                        <div class="alert alert-info">
                            <h3 class="h5 mb-3">Dokumen yang Diperlukan:</h3>
                            <ol class="mb-0">
                                <li>Surat Pengantar RT/RW</li>
                                <li>Buku Nikah (bagi yang sudah menikah)</li>
                                <li>Surat Pindah (bagi pendatang)</li>
                                <li>KTP Suami dan Istri</li>
                                <li>Surat Keterangan Pindah (bagi yang pindah dari luar daerah)</li>
                                <li>Surat Keterangan Kematian (jika ada anggota keluarga yang meninggal)</li>
                            </ol>
                        </div>
                    </section>

                    <!-- Download Persyaratan -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Download Persyaratan</h2>
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
                    </section>

                    <!-- Informasi Tambahan -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Informasi Tambahan</h2>
                        <div class="alert alert-warning">
                            <h3 class="h5 mb-3">Catatan Penting:</h3>
                            <ul class="mb-0">
                                <li>Proses pembuatan KK membutuhkan waktu 1-3 hari kerja</li>
                                <li>KK harus diperbarui jika ada perubahan data keluarga</li>
                                <li>Biaya pembuatan KK gratis</li>
                                <li>Setiap keluarga hanya diperbolehkan memiliki 1 KK</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Tombol Aksi -->
                    <div class="text-center">
                        <a href="/pelayanan/kk/form.php" class="btn btn-primary btn-lg">
                            <i class="material-icons">edit_document</i>
                            Ajukan Pembuatan KK
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../components/footer.php'; ?>
