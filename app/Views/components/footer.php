  </main>

  <footer class="footer" role="contentinfo">
    <div class="footer-container footer-grid">
      <img src="<?=BASE_URL?>/public/img/Lambang_Kota_Tangerang_Selatan.png" alt="Logo Kelurahan" class="logo-image" />
      <section class="footer-section footer-address" aria-label="Alamat kantor kelurahan">
        <h3>Alamat Kantor Kelurahan</h3>
        <address>
          Jl. Kp. Ciater II No.007/02, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310<br />
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d473.67968263476246!2d106.67083355024974!3d-6.279463817864947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb1eb1ba01b3%3A0xb64c1bbeca6af6c3!2sKantor%20Lurah%20Lengkong%20Wetan!5e0!3m2!1sen!2sid!4v1750315758485!5m2!1sen!2sid" 
          width="600" 
          height="450" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </section>
    </div>
    <div class="footer-bottom-centered">
      <p>© 2024 Kelurahan. All rights reserved.</p>
    </div>
  </footer>

  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider JS CDN -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navList = document.querySelector('.nav-list');
    menuToggle.addEventListener('click', () => {
      const expanded = menuToggle.getAttribute('aria-expanded') === 'true' || false;
      menuToggle.setAttribute('aria-expanded', !expanded);
      navList.classList.toggle('nav-list-active');
    });

    // Dropdown menus accessibility and toggle
    const dropdownButtons = document.querySelectorAll('.nav-dropdown > .nav-button');
    dropdownButtons.forEach((btn) => {
      btn.addEventListener('click', () => {
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        dropdownButtons.forEach(b => {
          if (b !== btn) {
            b.setAttribute('aria-expanded', 'false');
            b.nextElementSibling.style.display = 'none';
          }
        });
        btn.setAttribute('aria-expanded', String(!expanded));
        const menu = btn.nextElementSibling;
        if (!expanded) {
          menu.style.display = 'block';
        } else {
          menu.style.display = 'none';
        }
      });
    });

    // Close dropdowns and menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!e.target.closest('.navbar') && !e.target.closest('.nav-button')) {
        dropdownButtons.forEach((btn) => {
          btn.setAttribute('aria-expanded', 'false');
          btn.nextElementSibling.style.display = 'none';
        });
        navList.classList.remove('nav-list-active');
        menuToggle.setAttribute('aria-expanded', 'false');
      }
    });
  </script>
  <?php if (isset($jsFiles) && is_array($jsFiles)): ?>
        <?php foreach ($jsFiles as $jsFile): ?>
            <script src="<?= BASE_URL . '/public/' . $jsFile; ?>"></script>
        <?php endforeach; ?>
  <?php endif; ?>


</body>
</html> 