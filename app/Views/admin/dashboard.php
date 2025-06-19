<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/public/css/admin.css">
    <style>
        body {margin:0;font-family:sans-serif;}
        .sidebar {height:100vh;width:220px;position:fixed;top:0;left:0;background:#222;color:#fff;padding-top:20px;transition:width 0.3s;overflow-x:hidden;}
        .sidebar.closed {width:60px;}
        .sidebar a {display:block;color:#fff;padding:16px;text-decoration:none;transition:0.2s;}
        .sidebar a:hover {background:#444;}
        .sidebar .toggle-btn {position:absolute;top:10px;right:-25px;background:#222;color:#fff;border-radius:50%;width:30px;height:30px;display:flex;align-items:center;justify-content:center;cursor:pointer;border:none;}
        .main {margin-left:220px;padding:20px;transition:margin-left 0.3s;}
        .main.closed {margin-left:60px;}
        @media (max-width:600px){.sidebar{width:100vw;position:relative;}.main{margin-left:0;}}
    </style>
</head>
<body>
<div class="sidebar" id="sidebar">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <a href="/admin/dashboard">Dashboard</a>
    <a href="/admin/strukturOrganisasi">Struktur Organisasi</a>
    <a href="/admin/fasilitas">Fasilitas</a>
    <a href="/admin/berita">Berita</a>
</div>
<div class="main" id="main">
    <h1>Selamat Datang, Admin!</h1>
    <p>Pilih menu di samping untuk mengelola konten website.</p>
</div>
<script>
function toggleSidebar() {
    var sidebar = document.getElementById('sidebar');
    var main = document.getElementById('main');
    sidebar.classList.toggle('closed');
    main.classList.toggle('closed');
}
</script>
</body>
</html> 