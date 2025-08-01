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
              <a href="<?=BASE_URL?>/pelayanan" class="nav-link" aria-current="page"><span class="material-icons nav-icon" aria-hidden="true">support_agent</span>Pelayanan</a>
            </button>
          </li>
          <li class="nav-dropdown">
            <button aria-haspopup="true" aria-expanded="false" aria-controls="fasilitas-menu" class="nav-button">
              <span class="material-icons nav-icon" aria-hidden="true">business</span> Fasilitas
              <span class="material-icons dropdown-icon" aria-hidden="true">expand_more</span>
            </button>
            <ul class="dropdown-menu" id="fasilitas-menu" role="menu">
            <li role="none"><a href="<?=BASE_URL?>/fasilitas/pendidikan" role="menuitem" class="dropdown-link">Pendikikan</a></li>
              <li role="none"><a href="<?=BASE_URL?>/fasilitas/kesehatan" role="menuitem" class="dropdown-link">Kesehatan</a></li>
              <li role="none"><a href="<?=BASE_URL?>/fasilitas/ibadah" role="menuitem" class="dropdown-link">Ibadah</a></li>
              <li role="none"><a href="<?=BASE_URL?>/fasilitas/balaiwarga" role="menuitem" class="dropdown-link">Balai Warga</a></li>
            </ul>
          </li>
          <li><a href="<?=BASE_URL?>/berita" class="nav-link"><span class="material-icons nav-icon" aria-hidden="true">article</span> Berita</a></li>
        </ul>
      </nav>