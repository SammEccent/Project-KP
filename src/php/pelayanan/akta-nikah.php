<?php
$base_url = '../';
require_once '../config.php';
require_once '../navbar.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembuatan Akta Perkawinan - Kelurahan Lengkong Wetan</title>
    <link rel="stylesheet" href="../css/utama.css">
    <link rel="stylesheet" href="../css/pelayanan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <main class="container">
        <section class="service-section">
            <h2>Pembuatan Akta Perkawinan</h2>
            <div class="service-content">
                <div class="service-steps">
                    <div class="step-item">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Persiapkan Dokumen yang Diperlukan</h3>
                            <p>Berikut adalah dokumen yang harus disiapkan:</p>
                            <ul class="requirements-list">
                                <li><i class="fas fa-check-circle"></i> Surat Nikah dari KUA</li>
                                <li><i class="fas fa-check-circle"></i> Kartu Keluarga (KK)</li>
                                <li><i class="fas fa-check-circle"></i> KTP kedua mempelai</li>
                                <li><i class="fas fa-check-circle"></i> Akta Kelahiran kedua mempelai</li>
                                <li><i class="fas fa-check-circle"></i> Surat Pengantar RT/RW</li>
                                <li><i class="fas fa-check-circle"></i> Pas foto 3x4 kedua mempelai (2 lembar)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Kunjungi Kelurahan</h3>
                            <p>Datang ke kantor kelurahan pada jam kerja (Senin-Jumat, 08:00-16:00) dengan membawa semua dokumen yang telah disiapkan.</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Pengisian Formulir</h3>
                            <p>Isi formulir permohonan pembuatan akta perkawinan dengan data yang lengkap dan benar. Pastikan semua informasi yang diisi sesuai dengan dokumen yang dibawa.</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Verifikasi Data</h3>
                            <p>Petugas akan melakukan verifikasi data dan dokumen yang telah diserahkan. Proses ini biasanya memakan waktu 1-2 hari kerja.</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3>Pengambilan Akta Perkawinan</h3>
                            <p>Setelah proses verifikasi selesai, Anda dapat mengambil akta perkawinan yang sudah jadi. Pastikan membawa tanda terima pengajuan.</p>
                        </div>
                    </div>
                </div>

                <div class="service-note">
                    <p><i class="fas fa-info-circle"></i> Catatan: Akta perkawinan harus dibuat selambat-lambatnya 60 hari setelah pernikahan. Jika lebih dari 60 hari, proses pembuatan akan lebih kompleks dan memerlukan persyaratan tambahan.</p>
                </div>
            </div>
        </section>
    </main>

    <?php require_once '../footer.php'; ?>
</body>
</html> 