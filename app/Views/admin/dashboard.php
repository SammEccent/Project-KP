<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['pageTitle'] ?? 'Admin Dashboard'; ?></title>
    
    <?php if (isset($data['cssFiles']) && is_array($data['cssFiles'])): ?>
        <?php foreach ($data['cssFiles'] as $cssFile): ?>
            <link rel="stylesheet" href="<?= BASE_URL . '/public/' . $cssFile; ?>" />
        <?php endforeach; ?>
    <?php endif; ?>
    
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
<?php include 'sidebar.php'; ?>
<div class="main" id="main">
    <h1>Selamat Datang, Admin!</h1>
    <p>Pilih menu di samping untuk mengelola konten website.</p>
    
    <div class="dashboard-stats">
        <div class="stat-card">
            <h3>Struktur Organisasi</h3>
            <p>Kelola data struktur organisasi kelurahan</p>
            <a href="<?= BASE_URL ?>/admin/strukturOrganisasi" class="btn">Kelola</a>
        </div>
        <div class="stat-card">
            <h3>Fasilitas</h3>
            <p>Kelola data fasilitas umum di kelurahan</p>
            <a href="<?= BASE_URL ?>/admin/fasilitas" class="btn">Kelola</a>
        </div>
        <div class="stat-card">
            <h3>Berita</h3>
            <p>Kelola berita dan pengumuman</p>
            <a href="<?= BASE_URL ?>/admin/berita" class="btn">Kelola</a>
        </div>
    </div>
</div>
</body>
</html> 