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
    <div class="page-header">
        <h2>Dashboard</h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px;">
        
        <div class="card">
            <h3 style="display: flex; align-items: center; gap: 10px; color: var(--text-muted); font-weight: 500;">
                <span class="material-icons-outlined">groups</span>
                Struktur Organisasi
            </h3>
            <p style="font-size: 2em; font-weight: 700; margin-top: 10px;">15</p>
            <small>Total Pejabat</small>
        </div>

        <div class="card">
            <h3 style="display: flex; align-items: center; gap: 10px; color: var(--text-muted); font-weight: 500;">
                <span class="material-icons-outlined">apartment</span>
                Fasilitas
            </h3>
            <p style="font-size: 2em; font-weight: 700; margin-top: 10px;">25</p>
            <small>Total Fasilitas</small>
        </div>

        <div class="card">
            <h3 style="display: flex; align-items: center; gap: 10px; color: var(--text-muted); font-weight: 500;">
                <span class="material-icons-outlined">article</span>
                Berita
            </h3>
            <p style="font-size: 2em; font-weight: 700; margin-top: 10px;">42</p>
            <small>Total Berita</small>
        </div>

    </div>

    <div class="card" style="margin-top: 30px;">
        <h3>Selamat Datang, Admin!</h3>
        <p>Anda dapat mengelola konten website melalui menu di samping. Gunakan panel ini untuk menambah, mengubah, atau menghapus data struktur organisasi, fasilitas, dan berita.</p>
    </div>
</div>
</body>
</html> 