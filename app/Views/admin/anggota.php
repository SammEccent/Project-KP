<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['pageTitle'] ?? 'Admin - Data Anggota'; ?></title>
    <?php if (isset($data['cssFiles']) && is_array($data['cssFiles'])): ?>
        <?php foreach ($data['cssFiles'] as $cssFile): ?>
            <link rel="stylesheet" href="<?= BASE_URL . '/public/' . $cssFile; ?>" />
        <?php endforeach; ?>
    <?php endif; ?>
    <style>
        .modal {
            display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100vw; height: 100vh;
            background: rgba(0,0,0,0.3); justify-content: center; align-items: center;
        }
        .modal.active { display: flex; }
        .modal-content {
            background: #fff; padding: 2rem; border-radius: 8px; min-width: 350px; max-width: 500px; width: 100%;
            box-shadow: 0 2px 16px rgba(0,0,0,0.2);
        }
        .modal-header { display: flex; justify-content: space-between; align-items: center; }
        .modal-header h3 { margin: 0; }
        .close-btn { background: none; border: none; font-size: 1.5em; cursor: pointer; }
        .form-group { margin-bottom: 1rem; }
        .form-group label { display: block; margin-bottom: 0.5rem; }
        .form-control { width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px; }
        .form-actions { display: flex; gap: 1rem; justify-content: flex-end; }
        .table-container { margin-top: 2rem; }
        .btn { padding: 0.5rem 1rem; border: none; border-radius: 4px; cursor: pointer; }
        .btn-primary { background: #1976d2; color: #fff; }
        .btn-secondary { background: #aaa; color: #fff; }
        .btn-warning { background: #ff9800; color: #fff; }
        .btn-danger { background: #e53935; color: #fff; }
        .alert { padding: 1rem; margin-bottom: 1rem; border-radius: 4px; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .form-text { font-size: 0.875em; color: #6c757d; }
        input[type="file"] { padding: 0.375rem 0.75rem; }
        .foto-preview-container { margin-top: 10px; }
        .foto-preview-container img { border: 2px solid #ddd; }
        .table img { transition: transform 0.2s; }
        .table img:hover { transform: scale(1.1); }
    </style>
</head>
<body>
<?php include 'sidebar.php'; ?>
<div class="main" id="main">
    <div class="page-header">
        <h2>Manajemen Data Anggota</h2>
        <button class="btn btn-primary" onclick="showModal()">Tambah Anggota</button>
    </div>
    
    <?php if (!empty($_SESSION['flash_message'])): ?>
        <div class="alert alert-<?= $_SESSION['flash_message']['type'] ?>">
            <?= $_SESSION['flash_message']['message'] ?>
        </div>
        <?php unset($_SESSION['flash_message']); ?>
    <?php endif; ?>
    
    <!-- Modal Form Tambah/Edit Anggota -->
    <div class="modal" id="anggotaModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle">Tambah Anggota</h3>
                <button class="close-btn" onclick="hideModal()">&times;</button>
            </div>
            <form id="anggotaForm" method="POST" action="<?= BASE_URL ?>/admin/anggotaSave" enctype="multipart/form-data">
                <input type="hidden" id="anggotaId" name="id" value="">
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="foto">Foto:</label>
                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
                    <small class="form-text text-muted">Format: JPG, PNG, GIF. Maksimal 2MB</small>
                    <div id="fotoPreview" style="margin-top: 10px; display: none;">
                        <img id="previewImg" src="" alt="Preview" style="max-width: 150px; max-height: 150px; border-radius: 8px;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="kontak">Kontak:</label>
                    <input type="text" name="kontak" id="kontak" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bio">Bio/Deskripsi:</label>
                    <textarea name="bio" id="bio" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" onclick="hideModal()">Batal</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Tabel Data Anggota -->
    <div class="table-container">
        <table border="1" cellpadding="8" style="margin-top:16px;width:100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Kontak</th>
                    <th>Bio/Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data['anggota'])): $no=1; foreach ($data['anggota'] as $row): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td>
                        <?php if (!empty($row['foto'])): ?>
                            <img src="<?= BASE_URL . '/public/' . $row['foto'] ?>" alt="<?= htmlspecialchars($row['nama']) ?>" 
                                 style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; border: 2px solid #ddd;">
                        <?php else: ?>
                            <div style="width: 50px; height: 50px; border-radius: 50%; background: #f0f0f0; display: flex; align-items: center; justify-content: center; border: 2px solid #ddd;">
                                <span style="font-size: 20px; color: #999;">👤</span>
                            </div>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['kontak'] ?? '-') ?></td>
                    <td><?= htmlspecialchars($row['bio'] ?? '-') ?></td>
                    <td>
                        <button class="btn btn-warning" onclick='editAnggota(<?= json_encode($row) ?>)'>Edit</button>
                        <a href="<?= BASE_URL ?>/admin/anggotaDelete/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="6">Belum ada data</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
function showModal() {
    document.getElementById('anggotaModal').classList.add('active');
    document.getElementById('modalTitle').textContent = 'Tambah Anggota';
    document.getElementById('anggotaForm').reset();
    document.getElementById('anggotaId').value = '';
    document.getElementById('fotoPreview').style.display = 'none';
}

function hideModal() {
    document.getElementById('anggotaModal').classList.remove('active');
}

function editAnggota(item) {
    showModal();
    document.getElementById('modalTitle').textContent = 'Edit Anggota';
    document.getElementById('anggotaId').value = item.id;
    document.getElementById('nama').value = item.nama;
    document.getElementById('kontak').value = item.kontak || '';
    document.getElementById('bio').value = item.bio || '';
    
    // Tampilkan foto yang sudah ada jika ada
    if (item.foto) {
        document.getElementById('previewImg').src = '<?= BASE_URL ?>/public/' + item.foto;
        document.getElementById('fotoPreview').style.display = 'block';
    } else {
        document.getElementById('fotoPreview').style.display = 'none';
    }
}

// Preview foto saat file dipilih
document.getElementById('foto').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('previewImg').src = e.target.result;
            document.getElementById('fotoPreview').style.display = 'block';
        };
        reader.readAsDataURL(file);
    } else {
        document.getElementById('fotoPreview').style.display = 'none';
    }
});
</script>
</body>
</html> 