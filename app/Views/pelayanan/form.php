<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h1 class="card-title">Form Pengajuan <?= ucfirst($jenisLayanan) ?></h1>
                        <p class="text-muted">Silakan isi form di bawah ini untuk mengajukan pembuatan <?= ucfirst($jenisLayanan) ?></p>
                    </div>

                    <!-- Flash Messages -->
                    <?php if (isset($_SESSION['flash_messages'])): ?>
                        <?php foreach ($_SESSION['flash_messages'] as $type => $message): ?>
                            <div class="alert alert-<?= $type === 'error' ? 'danger' : $type ?> alert-dismissible fade show" role="alert">
                                <?= htmlspecialchars($message) ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endforeach; ?>
                        <?php unset($_SESSION['flash_messages']); ?>
                    <?php endif; ?>

                    <form action="<?=BASE_URL?>/pelayanan/submit" method="POST" class="needs-validation" novalidate>
                        <input type="hidden" name="jenis_layanan" value="<?= htmlspecialchars($jenisLayanan) ?>">
                        
                        <!-- Data Pemohon -->
                        <section class="mb-4">
                            <h3 class="section-title">Data Pemohon</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                    <div class="invalid-feedback">
                                        Nama lengkap harus diisi.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nik" class="form-label">NIK <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nik" name="nik" maxlength="16" required>
                                    <div class="invalid-feedback">
                                        NIK harus diisi dengan 16 digit.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Lengkap <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                                <div class="invalid-feedback">
                                    Alamat lengkap harus diisi.
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="rt" class="form-label">RT</label>
                                    <input type="text" class="form-control" id="rt" name="rt" maxlength="3">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="rw" class="form-label">RW</label>
                                    <input type="text" class="form-control" id="rw" name="rw" maxlength="3">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="agama" class="form-label">Agama</label>
                                    <select class="form-select" id="agama" name="agama">
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
                                    <select class="form-select" id="status_perkawinan" name="status_perkawinan">
                                        <option value="">Pilih Status</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                    <select class="form-select" id="kewarganegaraan" name="kewarganegaraan">
                                        <option value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                    </select>
                                </div>
                            </div>
                        </section>

                        <!-- Data Kontak -->
                        <section class="mb-4">
                            <h3 class="section-title">Data Kontak</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="telepon" class="form-label">Nomor Telepon <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="telepon" name="telepon" required>
                                    <div class="invalid-feedback">
                                        Nomor telepon harus diisi.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                    <div class="invalid-feedback">
                                        Format email tidak valid.
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Data Khusus berdasarkan Jenis Layanan -->
                        <?php if ($jenisLayanan === 'akta-lahir'): ?>
                        <section class="mb-4">
                            <h3 class="section-title">Data Kelahiran</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="tempat_kelahiran" class="form-label">Tempat Kelahiran</label>
                                    <input type="text" class="form-control" id="tempat_kelahiran" name="tempat_kelahiran">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="tanggal_kelahiran" class="form-label">Tanggal Kelahiran</label>
                                    <input type="date" class="form-control" id="tanggal_kelahiran" name="tanggal_kelahiran">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="anak_ke" class="form-label">Anak Ke-</label>
                                    <input type="number" class="form-control" id="anak_ke" name="anak_ke" min="1">
                                </div>
                            </div>
                        </section>
                        <?php endif; ?>

                        <!-- Persetujuan -->
                        <section class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="persetujuan" name="persetujuan" required>
                                <label class="form-check-label" for="persetujuan">
                                    Saya menyatakan bahwa data yang saya berikan adalah benar dan dapat dipertanggungjawabkan. <span class="text-danger">*</span>
                                </label>
                                <div class="invalid-feedback">
                                    Anda harus menyetujui pernyataan ini.
                                </div>
                            </div>
                        </section>

                        <!-- Tombol Aksi -->
                        <div class="d-flex justify-content-between">
                            <a href="<?=BASE_URL?>/pelayanan/<?= $jenisLayanan ?>" class="btn btn-secondary">
                                <span class="material-icons">arrow_back</span>
                                Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <span class="material-icons">send</span>
                                Kirim Pengajuan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Form validation
(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

// NIK validation
document.getElementById('nik').addEventListener('input', function(e) {
    this.value = this.value.replace(/[^0-9]/g, '');
    if (this.value.length > 16) {
        this.value = this.value.slice(0, 16);
    }
});

// Phone validation
document.getElementById('telepon').addEventListener('input', function(e) {
    this.value = this.value.replace(/[^0-9]/g, '');
});
</script> 