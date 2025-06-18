<nav class="navbar" role="navigation" aria-label="Main navigation">
        <ul class="nav-list">
          <li><a href="<?=BASE_URL?>/" class="nav-link" aria-current="page"><span class="material-icons nav-icon" aria-hidden="true">home</span> Beranda</a></li>
          <li class="nav-dropdown">
            <button aria-haspopup="true" aria-expanded="false" aria-controls="profile-menu" class="nav-button">
              <span class="material-icons nav-icon" aria-hidden="true">account_box</span> Profile
              <span class="material-icons dropdown-icon" aria-hidden="true">expand_more</span>
            </button>
            <ul class="dropdown-menu" id="profile-menu" role="menu">
              <li role="none"><a href="<?=BASE_URL?>/sejarah" role="menuitem" class="dropdown-link">Sejarah</a></li>
              <li role="none"><a href="<?=BASE_URL?>/visimisi" role="menuitem" class="dropdown-link">Visi - Misi</a></li>
              <li role="none"><a href="<?=BASE_URL?>/strukturOrganisasi" role="menuitem" class="dropdown-link">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="nav-dropdown">
            <button aria-haspopup="true" aria-expanded="false" aria-controls="pelayanan-menu" class="nav-button">
              <span class="material-icons nav-icon" aria-hidden="true">support_agent</span> Pelayanan
              <span class="material-icons dropdown-icon" aria-hidden="true">expand_more</span>
            </button>
            <ul class="dropdown-menu" id="pelayanan-menu" role="menu">
              <li role="none"><a href="/pelayanan/kk" role="menuitem" class="dropdown-link">Kartu Keluarga</a></li>
              <li role="none"><a href="/pelayanan/ktp" role="menuitem" class="dropdown-link">KTP</a></li>
              <li role="none"><a href="/pelayanan/kia" role="menuitem" class="dropdown-link">KIA</a></li>
              <li role="none"><a href="/pelayanan/akta-lahir" role="menuitem" class="dropdown-link">Akta Lahir</a></li>
              <li role="none"><a href="/pelayanan/akta-kematian" role="menuitem" class="dropdown-link">Akta Kematian</a></li>
              <li role="none"><a href="/pelayanan/akta-nikah" role="menuitem" class="dropdown-link">Akta Nikah</a></li>
              <li role="none"><a href="/pelayanan/akta-cerai" role="menuitem" class="dropdown-link">Akta Cerai</a></li>
            </ul>
          </li>
          <li class="nav-dropdown">
            <button aria-haspopup="true" aria-expanded="false" aria-controls="fasilitas-menu" class="nav-button">
              <span class="material-icons nav-icon" aria-hidden="true">business</span> Fasilitas
              <span class="material-icons dropdown-icon" aria-hidden="true">expand_more</span>
            </button>
            <ul class="dropdown-menu" id="fasilitas-menu" role="menu">
              <li role="none"><a href="/fasilitas/pendidikan" role="menuitem" class="dropdown-link">Pendidikan</a></li>
              <li role="none"><a href="/fasilitas/kesehatan" role="menuitem" class="dropdown-link">Kesehatan</a></li>
              <li role="none"><a href="/fasilitas/ibadah" role="menuitem" class="dropdown-link">Ibadah</a></li>
              <li role="none"><a href="/fasilitas/balai" role="menuitem" class="dropdown-link">Balai Warga</a></li>
            </ul>
          </li>
          <li><a href="#" class="nav-link"><span class="material-icons nav-icon" aria-hidden="true">article</span> Berita</a></li>
        </ul>
        <div class="nav-user-dropdown nav-dropdown">
          <button class="nav-button" aria-haspopup="true" aria-expanded="false" aria-controls="user-menu">
            <span class="material-icons" aria-hidden="true">account_circle</span>
          </button>
          <div class="dropdown-menu" id="user-menu" role="menu" style="right:0; left:auto; min-width:120px;">
            <a href="#" class="dropdown-link" role="menuitem">Login</a>
          </div>
        </div>
      </nav>