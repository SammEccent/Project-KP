<?php
require_once '../database.php';
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi - Kelurahan Semanan</title>
    <link rel="stylesheet" href="../utama.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="logo">
                    <img src="../assets/images/logo-jakarta.png" alt="Logo Jakarta">
                    <h1>Kelurahan Semanan</h1>
                </div>
                <div class="contact-info">
                    <p><i class="fas fa-phone"></i> (021) 543-XXXX</p>
                    <p><i class="fas fa-envelope"></i> kelurahan.semanan@jakarta.go.id</p>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ul class="main-menu">
                    <li><a href="../index.php">Beranda</a></li>
                    <li class="has-submenu">
                        <a href="../profil.php">Profil</a>
                        <ul class="submenu">
                            <li><a href="sejarah.php">Sejarah</a></li>
                            <li><a href="struktur.php">Struktur Organisasi</a></li>
                            <li><a href="tugas.php">Tugas dan Fungsi</a></li>
                            <li><a href="visi-misi.php">Visi dan Misi</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="../fasilitas.php">Fasilitas</a>
                        <ul class="submenu">
                            <li><a href="../fasilitas/kesehatan.php">Kesehatan</a></li>
                            <li><a href="../fasilitas/pendidikan.php">Pendidikan</a></li>
                            <li><a href="../fasilitas/ibadah.php">Tempat Ibadah</a></li>
                            <li><a href="../fasilitas/balai.php">Balai Desa</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="../pelayanan.php">Pelayanan</a>
                        <ul class="submenu">
                            <li><a href="../pelayanan/kk.php">Pembuatan KK</a></li>
                            <li><a href="../pelayanan/ktp.php">Pembuatan KTP</a></li>
                            <li><a href="../pelayanan/kia.php">Pembuatan KIA</a></li>
                            <li><a href="../pelayanan/akta-lahir.php">Akta Kelahiran</a></li>
                            <li><a href="../pelayanan/akta-mati.php">Akta Kematian</a></li>
                            <li><a href="../pelayanan/akta-nikah.php">Akta Perkawinan</a></li>
                            <li><a href="../pelayanan/akta-cerai.php">Akta Perceraian</a></li>
                        </ul>
                    </li>
                    <li><a href="../kontak.php">Kontak</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="page-header">
            <div class="container">
                <h2>Struktur Organisasi</h2>
            </div>
        </section>

        <section class="content">
            <div class="container">
                <div class="struktur-wrapper">
                    <?php
                    $stmt = $pdo->query("SELECT * FROM struktur_organisasi ORDER BY urutan ASC");
                    while($row = $stmt->fetch()) {
                        echo '<div class="struktur-card">';
                        if($row['foto']) {
                            echo '<div class="struktur-image">';
                            echo '<img src="../assets/images/struktur/' . htmlspecialchars($row['foto']) . '" alt="' . htmlspecialchars($row['nama']) . '">';
                            echo '</div>';
                        }
                        echo '<div class="struktur-info">';
                        echo '<h3>' . htmlspecialchars($row['nama']) . '</h3>';
                        echo '<p class="jabatan">' . htmlspecialchars($row['jabatan']) . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <h3>Kelurahan Semanan</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Semanan Raya No.45, RT.6/RW.7</p>
                    <p>Semanan, Kec. Kalideres, Kota Jakarta Barat</p>
                    <p>DKI Jakarta 11850</p>
                </div>
                <div class="footer-contact">
                    <h3>Kontak</h3>
                    <p><i class="fas fa-phone"></i> (021) 543-XXXX</p>
                    <p><i class="fas fa-envelope"></i> kelurahan.semanan@jakarta.go.id</p>
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
                <p>&copy; <?php echo date('Y'); ?> Kelurahan Semanan. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
</body>
</html>