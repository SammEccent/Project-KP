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
    <div class="page-header">
        <h2>Manajemen Struktur Organisasi</h2>
        <button class="btn btn-primary" onclick="showAddForm()">Tambah Data</button>
    </div>

    <!-- Form Tambah/Edit -->
    <div id="formContainer" class="form-container" style="display: none;">
        <div class="form-card">
            <h3 id="formTitle">Tambah Struktur Organisasi</h3>
            <form id="strukturForm" method="POST" action="<?= BASE_URL ?>/admin/strukturOrganisasi/save" enctype="multipart/form-data">
                <input type="hidden" id="editId" name="id" value="">
                
                <div class="form-group">
                    <label for="jabatan">Jabatan:</label>
                    <input type="text" id="jabatan" name="jabatan" required class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="nama_pejabat">Nama Pejabat:</label>
                    <input type="text" id="nama_pejabat" name="nama_pejabat" required class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="parent_id">Atasan:</label>
                    <select id="parent_id" name="parent_id" class="form-control">
                        <option value="">Tidak Ada Atasan</option>
                        <option value="1">Lurah</option>
                        <option value="2">Sekretaris Lurah</option>
                        <option value="3">Kasi Pemerintahan</option>
                        <option value="4">Kasi Kesejahteraan Rakyat</option>
                        <option value="5">Kasi Pelayanan</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="urutan">Urutan:</label>
                    <input type="number" id="urutan" name="urutan" required class="form-control" min="1">
                </div>
                
                <div class="form-group">
                    <label for="foto">Foto Pejabat:</label>
                    <input type="file" id="foto" name="foto" accept="image/*" class="form-control">
                    <small class="form-text">Format: JPG, PNG. Maksimal 1MB.</small>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" onclick="hideForm()">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel Data -->
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
            <tbody id="strukturTableBody">
                <tr>
                    <td>1</td>
                    <td><img src="<?= BASE_URL ?>/public/img/drafLurah.jpg" alt="Foto Pejabat" style="width:50px;height:50px;object-fit:cover;border-radius:50%;"></td>
                    <td>Lurah</td>
                    <td>Budi Santoso</td>
                    <td>-</td>
                    <td>1</td>
                    <td>
                        <button class="btn btn-warning" onclick="editData(1, 'Lurah', 'Budi Santoso', '', 1)">Edit</button>
                        <button class="btn btn-danger" onclick="deleteData(1)">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="<?= BASE_URL ?>/public/img/drafLurah.jpg" alt="Foto Pejabat" style="width:50px;height:50px;object-fit:cover;border-radius:50%;"></td>
                    <td>Sekretaris Lurah</td>
                    <td>Siti Aminah</td>
                    <td>Lurah</td>
                    <td>2</td>
                    <td>
                        <button class="btn btn-warning" onclick="editData(2, 'Sekretaris Lurah', 'Siti Aminah', '1', 2)">Edit</button>
                        <button class="btn btn-danger" onclick="deleteData(2)">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="<?= BASE_URL ?>/public/img/drafLurah.jpg" alt="Foto Pejabat" style="width:50px;height:50px;object-fit:cover;border-radius:50%;"></td>
                    <td>Kasi Pemerintahan</td>
                    <td>Agus Salim</td>
                    <td>Sekretaris Lurah</td>
                    <td>3</td>
                    <td>
                        <button class="btn btn-warning" onclick="editData(3, 'Kasi Pemerintahan', 'Agus Salim', '2', 3)">Edit</button>
                        <button class="btn btn-danger" onclick="deleteData(3)">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
function showAddForm() {
    document.getElementById('formContainer').style.display = 'block';
    document.getElementById('formTitle').textContent = 'Tambah Struktur Organisasi';
    document.getElementById('strukturForm').reset();
    document.getElementById('editId').value = '';
}

function hideForm() {
    document.getElementById('formContainer').style.display = 'none';
}

function editData(id, jabatan, nama_pejabat, parent_id, urutan) {
    document.getElementById('formContainer').style.display = 'block';
    document.getElementById('formTitle').textContent = 'Edit Struktur Organisasi';
    document.getElementById('editId').value = id;
    document.getElementById('jabatan').value = jabatan;
    document.getElementById('nama_pejabat').value = nama_pejabat;
    document.getElementById('parent_id').value = parent_id;
    document.getElementById('urutan').value = urutan;
}

function deleteData(id) {
    if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
        // Implementasi delete
        alert('Data berhasil dihapus!');
        // Reload halaman atau update tabel
    }
}
</script>
</body>
</html> 