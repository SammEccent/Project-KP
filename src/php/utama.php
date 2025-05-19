<?php
require_once 'sql/database.php';
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Lengkong Wetan - Tangerang Selatan</title>
    <link rel="stylesheet" href="utama.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="logo">
                    <img src="assets/images/logo-jakarta.png" alt="Logo Jakarta">
                    <h1>Kelurahan Lengkong Wetan</h1>
                </div>
                <div class="contact-info">
                    <p><i class="fas fa-phone"></i> (021) 543-XXXX</p>
                    <p><i class="fas fa-envelope"></i> kelurahan.Lengkong_Wetan@jakarta.go.id</p>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ul class="main-menu">
                    <li><a href="utama.php">Beranda</a></li>
                    <li class="has-submenu">
                        <a href="profil.php">Profil</a>
                        <ul class="submenu">
                            <li><a href="profil/sejarah.php">Sejarah</a></li>
                            <li><a href="profil/struktur.php">Struktur Organisasi</a></li>
                            <li><a href="profil/tugas.php">Tugas dan Fungsi</a></li>
                            <li><a href="profil/visi-misi.php">Visi dan Misi</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="fasilitas.php">Fasilitas</a>
                        <ul class="submenu">
                            <li><a href="fasilitas/kesehatan.php">Kesehatan</a></li>
                            <li><a href="fasilitas/pendidikan.php">Pendidikan</a></li>
                            <li><a href="fasilitas/ibadah.php">Tempat Ibadah</a></li>
                            <li><a href="fasilitas/balai.php">Balai Desa</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="pelayanan.php">Pelayanan</a>
                        <ul class="submenu">
                            <li><a href="pelayanan/kk.php">Pembuatan KK</a></li>
                            <li><a href="pelayanan/ktp.php">Pembuatan KTP</a></li>
                            <li><a href="pelayanan/kia.php">Pembuatan KIA</a></li>
                            <li><a href="pelayanan/akta-lahir.php">Akta Kelahiran</a></li>
                            <li><a href="pelayanan/akta-mati.php">Akta Kematian</a></li>
                            <li><a href="pelayanan/akta-nikah.php">Akta Perkawinan</a></li>
                            <li><a href="pelayanan/akta-cerai.php">Akta Perceraian</a></li>
                        </ul>
                    </li>
                    <li><a href="#footer-content">Kontak</a></li>
                </ul>
            </div>
        </nav>
    </header>

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

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <h3>Kelurahan Lengkong Wetan</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan Raya No.45, RT.6/RW.7</p>
                    <p>Lengkong Wetan, Kec. Kalideres, Kota Jakarta Barat</p>
                    <p>DKI Jakarta 11850</p>
                </div>
                <div class="footer-contact">
                    <h3>Kontak</h3>
                    <p><i class="fas fa-phone"></i> (021) 543-XXXX</p>
                    <p><i class="fas fa-envelope"></i> kelurahan.Lengkong Wetan@jakarta.go.id</p>
                    <p><i class="fas fa-clock"></i> Senin - Jumat: 08:00 - 16:00</p>
                </div>
                <div class="footer-social">
                    <h3>Media Sosial</h3>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Kelurahan Lengkong Wetan. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
</body>
</html>