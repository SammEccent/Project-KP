<?php
require_once 'database.php';
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Lengkong Wetan - Tangerang Selatan</title>
    <link rel="stylesheet" href="../css/utama.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <main>
        <section class="hero">
            <div class="container">
                <h2>Selamat Datang di Website Resmi Kelurahan Lengkong Wetan</h2>
                <p>Melayani Masyarakat dengan Sepenuh Hati</p>
            </div>
        </section>

        <section class="pelayanan-cepat">
            <div class="container">
                <h2>Layanan Cepat</h2>
                <div class="pelayanan-grid">
                    <?php
                    $stmt = $pdo->query("SELECT * FROM layanan LIMIT 4");
                    while($row = $stmt->fetch()) {
                        echo '<div class="pelayanan-card">';
                        echo '<i class="fas fa-file-alt"></i>';
                        echo '<h3>' . htmlspecialchars($row['nama_layanan']) . '</h3>';
                        echo '<p>' . htmlspecialchars($row['deskripsi']) . '</p>';
                        echo '<a href="pelayanan/' . strtolower(str_replace(' ', '-', $row['nama_layanan'])) . '.php" class="btn">Selengkapnya</a>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </section>

        <section class="fasilitas">
            <div class="container">
                <h2>Fasilitas Umum</h2>
                <div class="fasilitas-grid">
                    <div class="fasilitas-card">
                        <i class="fas fa-hospital"></i>
                        <h3>Kesehatan</h3>
                        <p>Informasi fasilitas kesehatan di Kelurahan Lengkong Wetan</p>
                        <a href="fasilitas/kesehatan.php" class="btn">Lihat Detail</a>
                    </div>
                    <div class="fasilitas-card">
                        <i class="fas fa-school"></i>
                        <h3>Pendidikan</h3>
                        <p>Informasi fasilitas pendidikan di Kelurahan Lengkong Wetan</p>
                        <a href="fasilitas/pendidikan.php" class="btn">Lihat Detail</a>
                    </div>
                    <div class="fasilitas-card">
                        <i class="fas fa-mosque"></i>
                        <h3>Tempat Ibadah</h3>
                        <p>Informasi tempat ibadah di Kelurahan Lengkong Wetan</p>
                        <a href="fasilitas/ibadah.php" class="btn">Lihat Detail</a>
                    </div>
                    <div class="fasilitas-card">
                        <i class="fas fa-building"></i>
                        <h3>Balai Desa</h3>
                        <p>Informasi balai desa di Kelurahan Lengkong Wetan</p>
                        <a href="fasilitas/balai.php" class="btn">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>