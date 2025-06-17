<?php
$page_title = "Tambah Sejarah Kelurahan";
include __DIR__ . '/../../layouts/header.php';
?>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3">Tambah Sejarah Kelurahan</h1>
                <a href="/profil/sejarah" class="btn btn-outline-secondary">
                    <span class="material-icons">arrow_back</span> Kembali
                </a>
            </div>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $_SESSION['error'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>

            <div class="card">
                <div class="card-body">
                    <form action="/profil/sejarah/create" method="POST" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" 
                                   pattern="[0-9]{4}" maxlength="4" required
                                   placeholder="Contoh: 1980">
                            <div class="invalid-feedback">
                                Masukkan tahun yang valid (4 digit angka)
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" 
                                   maxlength="255" required
                                   placeholder="Contoh: Pendirian Kelurahan">
                            <div class="invalid-feedback">
                                Judul harus diisi
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" 
                                      rows="5" required
                                      placeholder="Jelaskan peristiwa sejarah yang terjadi..."></textarea>
                            <div class="invalid-feedback">
                                Deskripsi harus diisi
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <span class="material-icons">save</span> Simpan
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
(function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, false)
    })
})()

// Format tahun input
document.getElementById('tahun').addEventListener('input', function(e) {
    this.value = this.value.replace(/[^0-9]/g, '');
});
</script>

<?php include __DIR__ . '/../../layouts/footer.php'; ?> 