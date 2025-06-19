<div class="sidebar" id="sidebar">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <a href="../public/admin/dashboard">Dashboard</a>
    <a href="../public/admin/strukturOrganisasi">Struktur Organisasi</a>
    <a href="../public/admin/fasilitas">Fasilitas</a>
    <a href="../public/admin/berita">Berita</a>
</div>
<script>
function toggleSidebar() {
    var sidebar = document.getElementById('sidebar');
    var main = document.getElementById('main');
    sidebar.classList.toggle('closed');
    main.classList.toggle('closed');
}
</script> 