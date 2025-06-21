<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['pageTitle'] ?? 'Admin - Struktur Organisasi'; ?></title>
    
    <?php if (isset($data['cssFiles']) && is_array($data['cssFiles'])): ?>
        <?php foreach ($data['cssFiles'] as $cssFile): ?>
            <link rel="stylesheet" href="<?= BASE_URL . '/public/' . $cssFile; ?>" />
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
<?php include 'sidebar.php'; ?>
<div class="main" id="main">
    <h2>Struktur Organisasi</h2>
    <button class="btn btn-primary">Tambah Data</button>
    <table border="1" cellpadding="8" style="margin-top:16px;width:100%;">
        <tr><th>No</th><th>Nama</th><th>Jabatan</th><th>Aksi</th></tr>
        <tr><td>1</td><td>Budi Santoso</td><td>Ketua</td><td><button class="btn btn-warning">Edit</button> <button class="btn btn-danger">Hapus</button></td></tr>
        <tr><td>2</td><td>Siti Aminah</td><td>Sekretaris</td><td><button class="btn btn-warning">Edit</button> <button class="btn btn-danger">Hapus</button></td></tr>
        <tr><td>3</td><td>Agus Salim</td><td>Bendahara</td><td><button class="btn btn-warning">Edit</button> <button class="btn btn-danger">Hapus</button></td></tr>
    </table>
</div>
</body>
</html> 