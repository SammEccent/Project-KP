<!-- frontend/navbar.php -->
<?php
// Pastikan session sudah dimulai
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Pastikan variabel $base_url sudah didefinisikan
if (!isset($base_url)) {
    require_once 'config.php';
}
?>
<header>
    <div class="header-top">
        <div class="container">
            <div class="logo">
                <img src="../assets/images/logo-jakarta.png" alt="Logo Jakarta">
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
                <li><a href="<?php echo $base_url; ?>php/utama.php">Beranda</a></li>
                <li class="has-submenu">
                <a href="#">Profil</a>
                        <ul class="submenu">
                        <li><a href="<?php echo $base_url; ?>php/profile/sejarah.php">Sejarah</a></li>
                        <li><a href="<?php echo $base_url; ?>php/profile/struktur.php">Struktur Organisasi</a></li>
                        <li><a href="<?php echo $base_url; ?>php/profile/visi-misi.php">Visi & Misi</a></li>
                        <li><a href="<?php echo $base_url; ?>php/profile/tugas.php">Tugas & Fungsi</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="<?php echo $base_url; ?>php/fasilitas.php">Fasilitas</a>
                    <ul class="submenu">
                        <li><a href="<?php echo $base_url; ?>php/fasilitas/kesehatan.php">Kesehatan</a></li>
                        <li><a href="<?php echo $base_url; ?>php/fasilitas/pendidikan.php">Pendidikan</a></li>
                        <li><a href="<?php echo $base_url; ?>php/fasilitas/ibadah.php">Tempat Ibadah</a></li>
                        <li><a href="<?php echo $base_url; ?>php/fasilitas/balai.php">Balai Desa</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="<?php echo $base_url; ?>php/pelayanan.php">Pelayanan</a>
                    <ul class="submenu">
                        <li><a href="<?php echo $base_url; ?>php/pelayanan/kk.php">Pembuatan KK</a></li>
                        <li><a href="<?php echo $base_url; ?>php/pelayanan/ktp.php">Pembuatan KTP</a></li>
                        <li><a href="<?php echo $base_url; ?>php/pelayanan/kia.php">Pembuatan KIA</a></li>
                        <li><a href="<?php echo $base_url; ?>php/pelayanan/akta-lahir.php">Akta Kelahiran</a></li>
                        <li><a href="<?php echo $base_url; ?>php/pelayanan/akta-mati.php">Akta Kematian</a></li>
                        <li><a href="<?php echo $base_url; ?>php/pelayanan/akta-nikah.php">Akta Perkawinan</a></li>
                        <li><a href="<?php echo $base_url; ?>php/pelayanan/akta-cerai.php">Akta Perceraian</a></li>
                    </ul>
                </li>
                <li><a href="#footer-content">Kontak</a></li>
            </ul>
        </div>
    </nav>
</header>