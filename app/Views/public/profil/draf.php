<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Website Kelurahan - Beranda</title>
  <link rel="stylesheet" href="<?= BASE_URL;?>/css/style.css"/>
  <link
    href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header class="header" role="banner">
    <div class="header-container">
      <a href="#" class="brand" aria-label="Website Kelurahan Beranda">
        <img src="<?=BASE_URL?>/img/Lambang_Kota_Tangerang_Selatan.png" alt="Logo Kelurahan" class="brand-logo" />
      </a>
      <?php
        require_once __DIR__ . '/../components/navbar.php';
        ?>
      <button aria-label="Toggle menu" class="menu-toggle" aria-expanded="false" aria-controls="menu-list">
        <span class="material-icons">menu</span>
      </button>
    </div>
  </header>

  <main>

  //kode halaman sejarah

  </main>

<footer class="footer" role="contentinfo">
  <div class="footer-container footer-grid">
    <img src="<?=BASE_URL?>/img/Lambang_Kota_Tangerang_Selatan.png"" alt="Logo Kelurahan" class="logo-image" />
    <section class="footer-section footer-address" aria-label="Alamat kantor kelurahan">
      <h3>Alamat Kantor Kelurahan</h3>
      <address>
        Jl. Merdeka No.123, Kota Contoh, Provinsi Contoh 12345<br />
        Telepon: <a href="tel:+62123456789">+62 123-4567-89</a><br />
        Jam Operasional: Senin - Jumat, 08:00 - 16:00 WIB
      </address>
    </section>
    <section class="footer-section footer-social" aria-label="Tautan media sosial">
      <h3>Media Sosial</h3>
      <div class="social-container">
          <ul class="social-icons">
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
          </ul>
      </div>
    </section>
    <section class="footer-section footer-map" aria-label="Peta lokasi kantor kelurahan">
      <h3>Peta Lokasi</h3>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.7475928485893!2d106.8256213392682!3d-6.175392299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5e911ca1d3f%3A0x3e0ce7d327d291f4!2sMonumen%20Nasional%20(Monas)!5e0!3m2!1sid!2sid!4v1695910087768!5m2!1sid!2sid"
        width="100%"
        height="180"
        style="border:0; border-radius:12px;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Peta Lokasi Kantor Kelurahan"
      ></iframe>
    </section>
  </div>
  <div class="footer-bottom-centered">
    <p>© 2024 Kelurahan. All rights reserved.</p>
  </div>
</footer>
</body>
</html> 
