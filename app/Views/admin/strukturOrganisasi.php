<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['pageTitle'] ?? 'Admin - Struktur Organisasi'; ?></title>
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
        .form-actions { display: flex; gap: 1rem; justify-content: flex-end; }
        .table-container { margin-top: 2rem; }
        .btn { padding: 0.5rem 1rem; border: none; border-radius: 4px; cursor: pointer; }
        .btn-primary { background: #1976d2; color: #fff; }
        .btn-secondary { background: #aaa; color: #fff; }
        .btn-warning { background: #ff9800; color: #fff; }
        .btn-danger { background: #e53935; color: #fff; }
        .table img { transition: transform 0.2s; }
        .table img:hover { transform: scale(1.1); }
    </style>
</head>
<body>
<?php include 'sidebar.php'; ?>
<div class="main" id="main">
    <div class="page-header">
        <h2>Manajemen Struktur Organisasi</h2>
        <button class="btn btn-primary" onclick="showModal()">Tambah Struktur</button>
    </div>
    <?php if (!empty($_SESSION['flash_message'])): ?>
        <div class="alert alert-<?= $_SESSION['flash_message']['type'] ?>">
            <?= $_SESSION['flash_message']['message'] ?>
        </div>
        <?php unset($_SESSION['flash_message']); ?>
    <?php endif; ?>
    <!-- Modal Form Tambah/Edit Struktur -->
    <div class="modal" id="strukturModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle">Tambah Struktur Organisasi</h3>
                <button class="close-btn" onclick="hideModal()">&times;</button>
            </div>
            <form id="strukturForm" method="POST" action="<?= BASE_URL ?>/admin/strukturOrganisasiSave">
                <input type="hidden" id="strukturId" name="id" value="">
                <div class="form-group">
                    <label for="jabatan">Jabatan:</label>
                    <select name="jabatan" id="jabatan" class="form-control" required>
                        <option value="">Pilih Jabatan</option>
                        <?php foreach ($data['jabatan'] as $j): ?>
                        <option value="<?= $j['id'] ?>"><?= htmlspecialchars($j['nama']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="anggota">Nama Pejabat:</label>
                    <select name="anggota" id="anggota" class="form-control" required>
                        <option value="">Pilih Nama Pejabat</option>
                        <?php foreach ($data['anggota'] as $a): ?>
                        <option value="<?= $a['id'] ?>"><?= htmlspecialchars($a['nama']) ?> <?= !empty($a['kontak']) ? '(' . htmlspecialchars($a['kontak']) . ')' : '' ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="parent_id">Atasan:</label>
                    <select name="parent_id" id="parent_id" class="form-control">
                        <option value="">Tidak Ada</option>
                        <?php foreach ($data['struktur'] as $s): ?>
                        <option value="<?= $s['id'] ?>"><?= htmlspecialchars($s['jabatan_nama']) ?> - <?= htmlspecialchars($s['anggota_nama']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="urutan">Urutan:</label>
                    <input type="number" name="urutan" id="urutan" class="form-control" min="1" required>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" onclick="hideModal()">Batal</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Tabel Data Struktur Organisasi -->
    <div class="table-container">
        <table border="1" cellpadding="8" style="margin-top:16px;width:100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Jabatan</th>
                    <th>Nama Pejabat</th>
                    <th>Atasan</th>
                    <th>Urutan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data['struktur'])): $no=1; foreach ($data['struktur'] as $row): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td>
                        <?php if (!empty($row['anggota_foto'])): ?>
                            <img src="<?= BASE_URL . '/public/' . $row['anggota_foto'] ?>" alt="<?= htmlspecialchars($row['anggota_nama']) ?>" 
                                 style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; border: 2px solid #ddd;">
                        <?php else: ?>
                            <div style="width: 50px; height: 50px; border-radius: 50%; background: #f0f0f0; display: flex; align-items: center; justify-content: center; border: 2px solid #ddd;">
                                <span style="font-size: 20px; color: #999;">👤</span>
                            </div>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($row['jabatan_nama']) ?></td>
                    <td><?= htmlspecialchars($row['anggota_nama']) ?></td>
                    <td><?= htmlspecialchars($row['atasan_jabatan_nama'] ?? '-') ?></td>
                    <td><?= htmlspecialchars($row['urutan']) ?></td>
                    <td>
                        <button class="btn btn-warning" onclick='editStruktur(<?= json_encode($row) ?>)'>Edit</button>
                        <a href="<?= BASE_URL ?>/admin/strukturOrganisasiDelete/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="7">Belum ada data</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
function showModal() {
    document.getElementById('strukturModal').classList.add('active');
    document.getElementById('modalTitle').textContent = 'Tambah Struktur Organisasi';
    document.getElementById('strukturForm').reset();
    document.getElementById('strukturId').value = '';
}
function hideModal() {
    document.getElementById('strukturModal').classList.remove('active');
}
function editStruktur(item) {
    showModal();
    document.getElementById('modalTitle').textContent = 'Edit Struktur Organisasi';
    document.getElementById('strukturId').value = item.id;
    document.getElementById('jabatan').value = item.jabatan_id;
    document.getElementById('anggota').value = item.anggota_id;
    document.getElementById('parent_id').value = item.atasan_id;
    document.getElementById('urutan').value = item.urutan;
}
</script>
</body>
</html> 