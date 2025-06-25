<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['pageTitle'] ?? 'Admin - Berita'; ?></title>
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
        .badge { padding: 0.2em 0.7em; border-radius: 1em; font-size: 0.9em; }
        .badge-success { background: #43a047; color: #fff; }
        .badge-secondary { background: #aaa; color: #fff; }
        .badge-primary { background: #1976d2; color: #fff; }
    </style>
</head>
<body>
<?php include 'sidebar.php'; ?>
<div class="main" id="main">
    <div class="page-header">
        <h2>Manajemen Berita</h2>
        <button class="btn btn-primary" onclick="showModal()">Tambah Berita</button>
    </div>

    <!-- Modal Form Tambah/Edit Berita -->
    <div class="modal" id="beritaModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle">Tambah Berita</h3>
                <button class="close-btn" onclick="hideModal()">&times;</button>
            </div>
            <form id="beritaForm" method="POST" action="<?= BASE_URL ?>/admin/beritaSave" enctype="multipart/form-data">
                <input type="hidden" id="editId" name="id" value="">
                <div class="form-group">
                    <label for="judul">Judul Berita:</label>
                    <input type="text" id="judul" name="judul" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori:</label>
                    <select id="kategori" name="kategori" required class="form-control">
                        <option value="">Pilih Kategori</option>
                        <?php if (!empty($data['categories'])): ?>
                            <?php foreach ($data['categories'] as $kategori): ?>
                                <option value="<?= $kategori['id'] ?>"><?= htmlspecialchars($kategori['nama']) ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ringkasan">Ringkasan:</label>
                    <textarea id="ringkasan" name="ringkasan" required class="form-control" rows="3" maxlength="200"></textarea>
                </div>
                <div class="form-group">
                    <label for="isi">Isi Berita:</label>
                    <textarea id="isi" name="isi" required class="form-control" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar Berita:</label>
                    <input type="file" id="gambar" name="gambar" accept="image/*" class="form-control">
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select id="status" name="status" required class="form-control">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" onclick="hideModal()">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel Data Berita -->
    <div class="table-container">
        <table border="1" cellpadding="8" style="margin-top:16px;width:100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Ringkasan</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data['berita'])): ?>
                    <?php $no = 1; foreach ($data['berita'] as $item): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= htmlspecialchars($item['judul']) ?></td>
                            <td><?= htmlspecialchars($item['kategori_nama']) ?></td>
                            <td><?= htmlspecialchars($item['isi_pendek']) ?></td>
                            <td><span class="badge <?= (isset($item['status']) && $item['status'] === 'published') ? 'badge-success' : 'badge-secondary' ?>"><?= isset($item['status']) ? htmlspecialchars($item['status']) : '-' ?></span></td>
                            <td><?= htmlspecialchars($item['tanggal_publish']) ?></td>
                            <td>
                                <button class="btn btn-warning" onclick='editBerita(<?= json_encode($item) ?>)'>Edit</button>
                                <a href="<?= BASE_URL ?>/admin/beritaDelete/<?= $item['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus berita ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="7">Belum ada data berita.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
function showModal() {
    document.getElementById('beritaModal').classList.add('active');
    document.getElementById('modalTitle').textContent = 'Tambah Berita';
    document.getElementById('beritaForm').reset();
    document.getElementById('editId').value = '';
}
function hideModal() {
    document.getElementById('beritaModal').classList.remove('active');
}
function editBerita(item) {
    showModal();
    document.getElementById('modalTitle').textContent = 'Edit Berita';
    document.getElementById('editId').value = item.id;
    document.getElementById('judul').value = item.judul;
    document.getElementById('kategori').value = item.kategori_id;
    document.getElementById('ringkasan').value = item.isi_pendek;
    document.getElementById('isi').value = item.isi ?? '';
    document.getElementById('status').value = item.status;
}
</script>
</body>
</html> 