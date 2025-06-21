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