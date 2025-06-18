<?php require_once __DIR__ . '/../components/navbar.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Pembuatan Kartu Identitas Anak</h1>
                    
                    <!-- Pengertian -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Pengertian</h2>
                        <p class="text-justify">
                            Kartu Identitas Anak (KIA) adalah identitas resmi anak yang berlaku sebagai identitas diri anak yang berusia di bawah 17 tahun dan belum menikah. KIA berfungsi sebagai bukti diri anak dan memudahkan anak dalam mengakses layanan publik.
                        </p>
                    </section>

                    <!-- Persyaratan -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Persyaratan</h2>
                        <div class="alert alert-info">
                            <h3 class="h5 mb-3">Dokumen yang Diperlukan:</h3>
                            <ol class="mb-0">
                                <li>Surat Pengantar RT/RW</li>
                                <li>Kartu Keluarga (KK)</li>
                                <li>Akta Kelahiran Anak</li>
                                <li>KTP Orang Tua/Wali</li>
                                <li>Pas Foto Anak 3x4 (2 lembar)</li>
                                <li>Surat Keterangan Pindah (bagi pendatang)</li>
                            </ol>
                        </div>
                    </section>

                    <!-- Download Persyaratan -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Download Persyaratan</h2>
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
                    </section>

                    <!-- Informasi Tambahan -->
                    <section class="mb-5">
                        <h2 class="h4 mb-3">Informasi Tambahan</h2>
                        <div class="alert alert-warning">
                            <h3 class="h5 mb-3">Catatan Penting:</h3>
                            <ul class="mb-0">
                                <li>KIA dapat dibuat sejak anak lahir</li>
                                <li>Proses pembuatan KIA membutuhkan waktu 1-2 hari kerja</li>
                                <li>KIA berlaku sampai anak berusia 17 tahun</li>
                                <li>Biaya pembuatan KIA gratis</li>
                                <li>KIA dapat digunakan sebagai pengganti KTP untuk anak di bawah 17 tahun</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Tombol Aksi -->
                    <div class="text-center">
                        <a href="/pelayanan/kia/form.php" class="btn btn-primary btn-lg">
                            <i class="material-icons">edit_document</i>
                            Ajukan Pembuatan KIA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../components/footer.php'; ?>
