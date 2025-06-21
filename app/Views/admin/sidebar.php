<div class="sidebar" id="sidebar">
    <a href="<?= BASE_URL ?>/admin/dashboard">Dashboard</a>
    <a href="<?= BASE_URL ?>/admin/strukturOrganisasi">Struktur Organisasi</a>
    <a href="<?= BASE_URL ?>/admin/fasilitas">Fasilitas</a>
    <a href="<?= BASE_URL ?>/admin/berita">Berita</a>
    <a href="<?= BASE_URL ?>/admin/logout" class="logout-link">Logout</a>
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
</div>

<script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('closed');
        document.getElementById('main').classList.toggle('closed');
    }
</script>

<style>
.sidebar .logout-link {
    position: absolute;
    bottom: 20px;
    width: 100%;
    background-color: #dc3545;
    text-align: center;
}
.sidebar .logout-link:hover {
    background-color: #c82333;
}
</style> 