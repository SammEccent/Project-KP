<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Struktur Organisasi</title>
    <link rel="stylesheet" href="/public/css/admin.css">
</head>
<body>
<?php include 'dashboard.php'; ?>
<div class="main">
    <h2>Struktur Organisasi</h2>
    <button>Tambah Data</button>
    <table border="1" cellpadding="8" style="margin-top:16px;width:100%;">
        <tr><th>No</th><th>Nama</th><th>Jabatan</th><th>Aksi</th></tr>
        <tr><td>1</td><td>Budi Santoso</td><td>Ketua</td><td><button>Edit</button> <button>Hapus</button></td></tr>
        <tr><td>2</td><td>Siti Aminah</td><td>Sekretaris</td><td><button>Edit</button> <button>Hapus</button></td></tr>
        <tr><td>3</td><td>Agus Salim</td><td>Bendahara</td><td><button>Edit</button> <button>Hapus</button></td></tr>
    </table>
</div>
</body>
</html> 