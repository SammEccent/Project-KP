<div class="sidebar" id="sidebar">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <a href="<?= BASE_URL ?>/admin/dashboard">Dashboard</a>
    <a href="<?= BASE_URL ?>/admin/strukturOrganisasi">Struktur Organisasi</a>
    <a href="<?= BASE_URL ?>/admin/fasilitas">Fasilitas</a>
    <a href="<?= BASE_URL ?>/admin/berita">Berita</a>
</div>
<script>
function toggleSidebar() {
    var sidebar = document.getElementById('sidebar');
    var main = document.getElementById('main');
    sidebar.classList.toggle('closed');
    main.classList.toggle('closed');
}
</script> 