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

  <main id="maincontent" tabindex="-1">
    <section id="hero" class="hero-section">
      <h1>Selamat Datang di Website Resmi Kelurahan</h1>
      <p>Melayani masyarakat dengan transparansi, profesionalisme, dan inovasi.</p>
      <img
        src="<?=BASE_URL?>/img/kantor.jpg"
        alt="Gambar gedung kelurahan"
        class="hero-image"
        loading="lazy"
      />
    </section>

    <section id="sambutan" class="sambutan-section" tabindex="0" aria-labelledby="sambutan-title">
      <div class="sambutan-image-container">
        <img
          src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/681ebe8c-e227-4e94-8bfe-cd68e66d128d.png"
          alt="Foto Kepala Kelurahan menyambut warga dengan latar belakang kantor kelurahan modern"
          loading="lazy"
        />
      </div>
      <div class="sambutan-text">
        <h2 id="sambutan-title">Sambutan Kepala Kelurahan</h2>
        <p>
          Dengan penuh semangat kami menyambut Anda di situs resmi Kelurahan kami. Kami berkomitmen
          memberikan pelayanan yang terbaik, transparan, dan inovatif demi membangun lingkungan yang
          harmonis dan maju bersama masyarakat.
        </p>
      </div>
    </section>

    <section id="layanan-cepat" class="layanan-cepat-section" aria-labelledby="layanan-cepat-title" tabindex="0">
      <h2 id="layanan-cepat-title" class="section-title">Layanan Cepat</h2>
      <div class="layanan-grid">
        <article class="layanan-card" tabindex="0" role="button" aria-label="Layanan Pengurusan Kartu Keluarga">
          <span class="material-icons layanan-icon" aria-hidden="true">badge  </span>
          <h3 class="layanan-title">Kartu Keluarga</h3>
          <p class="layanan-description">Proses cepat pembuatan dan pengurusan Kartu Keluarga tanpa ribet.</p>
        </article>
        <article class="layanan-card" tabindex="0" role="button" aria-label="Layanan Pembuatan dan Perpanjangan KTP">
          <span class="material-icons layanan-icon" aria-hidden="true">badge</span>
          <h3 class="layanan-title">KTP</h3>
          <p class="layanan-description">Prioritas layanan pembuatan dan perpanjangan KTP dengan proses efisien.</p>
        </article>
        <article class="layanan-card" tabindex="0" role="button" aria-label="Layanan Izin Usaha">
          <span class="material-icons layanan-icon" aria-hidden="true">business_center</span>
          <h3 class="layanan-title">Izin Usaha</h3>
          <p class="layanan-description">Layanan cepat pengurusan izin usaha untuk mendukung aktivitas bisnis Anda.</p>
        </article>
        <article class="layanan-card" tabindex="0" role="button" aria-label="Layanan Aduan dan Pengaduan">
          <span class="material-icons layanan-icon" aria-hidden="true">report_problem</span>
          <h3 class="layanan-title">Aduan</h3>
          <p class="layanan-description">Pengaduan masyarakat ditindaklanjuti cepat demi kepuasan warga.</p>
        </article>
      </div>
    </section>
