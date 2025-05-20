<?php
require_once '../config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas dan Fungsi - Kelurahan Lengkong Wetan</title>
    <link rel="stylesheet" href="../../css/utama.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include '../navbar.php.php'; ?>

    <main>
        <section class="tugas-section">
            <div class="container">
                <h2>Tugas dan Fungsi Kelurahan Lengkong Wetan</h2>
                
                <div class="tugas-content">
                    <div class="tugas-card">
                        <h3><i class="fas fa-tasks"></i> Tugas Pokok</h3>
                        <ul>
                            <li>Melaksanakan urusan pemerintahan yang menjadi kewenangan daerah</li>
                            <li>Melaksanakan urusan pemerintahan umum</li>
                            <li>Melaksanakan pembinaan dan pemberdayaan masyarakat</li>
                            <li>Melaksanakan urusan pemerintahan yang dilimpahkan oleh Camat</li>
                        </ul>
                    </div>

                    <div class="tugas-card">
                        <h3><i class="fas fa-cogs"></i> Fungsi</h3>
                        <ul>
                            <li>Penyelenggaraan pemerintahan kelurahan</li>
                            <li>Pemberdayaan masyarakat</li>
                            <li>Pelayanan masyarakat</li>
                            <li>Pemeliharaan ketentraman dan ketertiban umum</li>
                            <li>Pembinaan dan pengembangan masyarakat</li>
                        </ul>
                    </div>

                    <div class="tugas-card">
                        <h3><i class="fas fa-handshake"></i> Kewenangan</h3>
                        <ul>
                            <li>Menyelenggarakan urusan pemerintahan yang menjadi kewenangan daerah</li>
                            <li>Melaksanakan urusan pemerintahan umum</li>
                            <li>Melaksanakan pembinaan dan pemberdayaan masyarakat</li>
                            <li>Melaksanakan urusan pemerintahan yang dilimpahkan oleh Camat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../footer.php'; ?>
</body>
</html>