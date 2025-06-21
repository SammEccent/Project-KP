<!-- Google Fonts Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<div class="sidebar" id="sidebar">
    <div class="sidebar-brand">
        <span class="material-icons-outlined">admin_panel_settings</span>
        <span class="nav-text">Admin Panel</span>
    </div>
    <a href="<?= BASE_URL ?>/admin/dashboard">
        <span class="material-icons-outlined">dashboard</span>
        <span class="nav-text">Dashboard</span>
    </a>
    <a href="<?= BASE_URL ?>/admin/strukturOrganisasi">
        <span class="material-icons-outlined">groups</span>
        <span class="nav-text">Struktur Organisasi</span>
    </a>
    <a href="<?= BASE_URL ?>/admin/fasilitas">
        <span class="material-icons-outlined">apartment</span>
        <span class="nav-text">Fasilitas</span>
    </a>
    <a href="<?= BASE_URL ?>/admin/berita">
        <span class="material-icons-outlined">article</span>
        <span class="nav-text">Berita</span>
    </a>
    
    <a href="<?= BASE_URL ?>/admin/logout" class="logout-link">
        <span class="material-icons-outlined">logout</span>
        <span class="nav-text">Logout</span>
    </a>
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
</div>

<script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('closed');
        document.getElementById('main').classList.toggle('closed');
    }

    // Add active class to current nav link
    document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll('.sidebar a');
        const currentLocation = window.location.href;

        links.forEach(link => {
            if (link.href === currentLocation) {
                link.classList.add('active');
            }
        });
    });
</script>

<style>
/* This style block is for positioning the logout link at the bottom */
/* It is removed from here and handled by flexbox in the main admin.css */
</style> 