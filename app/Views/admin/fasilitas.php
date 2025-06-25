<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['pageTitle'] ?? 'Admin - Fasilitas'; ?></title>
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
        .badge-primary { background: #1976d2; color: #fff; }
    </style>
</head>
<body>
<?php include 'sidebar.php'; ?>
<div class="main" id="main">
    <div class="page-header">
        <h2>Manajemen Fasilitas</h2>
        <button class="btn btn-primary" onclick="showModal()">Tambah Fasilitas</button>
    </div>

    <!-- Modal Form Tambah/Edit Fasilitas -->
    <div class="modal" id="fasilitasModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle">Tambah Fasilitas</h3>
                <button class="close-btn" onclick="hideModal()">&times;</button>
            </div>
            <form id="fasilitasForm" method="POST" action="<?= BASE_URL ?>/admin/fasilitasSave">
                <input type="hidden" id="editId" name="id" value="">
                <div class="form-group">
                    <label for="nama_fasilitas">Nama Fasilitas:</label>
                    <input type="text" id="nama_fasilitas" name="nama_fasilitas" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis/Kategori:</label>
                    <select id="jenis" name="jenis" required class="form-control">
                        <option value="">Pilih Jenis</option>
                        <?php if (!empty($data['jenis'])): ?>
                            <?php foreach ($data['jenis'] as $j): ?>
                                <option value="<?= $j['id'] ?>"><?= htmlspecialchars($j['nama']) ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea id="alamat" name="alamat" required class="form-control" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="kontak">Kontak:</label>
                    <input type="text" id="kontak" name="kontak" class="form-control">
                </div>
                <div class="form-group">
                    <label for="link_map">Link Google Maps:</label>
                    <input type="text" id="link_map" name="link_map" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea id="deskripsi" name="deskripsi" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" onclick="hideModal()">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel Data Fasilitas -->
    <div class="table-container">
        <table border="1" cellpadding="8" style="margin-top:16px;width:100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                    <th>Link Map</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data['fasilitas'])): ?>
                    <?php $no = 1; foreach ($data['fasilitas'] as $item): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= htmlspecialchars($item['nama']) ?></td>
                            <td><?= htmlspecialchars($item['jenis_nama']) ?></td>
                            <td><?= htmlspecialchars($item['alamat']) ?></td>
                            <td><?= htmlspecialchars($item['kontak']) ?></td>
                            <td><a href="<?= htmlspecialchars($item['link_map']) ?>" target="_blank">Lihat Map</a></td>
                            <td><?= htmlspecialchars($item['deskripsi']) ?></td>
                            <td>
                                <button class="btn btn-warning" onclick='editFasilitas(<?= json_encode($item) ?>)'>Edit</button>
                                <a href="<?= BASE_URL ?>/admin/fasilitasDelete/<?= $item['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus fasilitas ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="8">Belum ada data fasilitas.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
function showModal() {
    document.getElementById('fasilitasModal').classList.add('active');
    document.getElementById('modalTitle').textContent = 'Tambah Fasilitas';
    document.getElementById('fasilitasForm').reset();
    document.getElementById('editId').value = '';
}
function hideModal() {
    document.getElementById('fasilitasModal').classList.remove('active');
}
function editFasilitas(item) {
    showModal();
    document.getElementById('modalTitle').textContent = 'Edit Fasilitas';
    document.getElementById('editId').value = item.id;
    document.getElementById('nama_fasilitas').value = item.nama;
    document.getElementById('jenis').value = item.jenis_id;
    document.getElementById('alamat').value = item.alamat;
    document.getElementById('kontak').value = item.kontak;
    document.getElementById('link_map').value = item.link_map;
    document.getElementById('deskripsi').value = item.deskripsi;
}
</script>
</body>
</html> 