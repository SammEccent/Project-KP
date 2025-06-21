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
</head>
<body>
<?php include 'sidebar.php'; ?>
<div class="main" id="main">
    <div class="page-header">
        <h2>Manajemen Fasilitas</h2>
        <button class="btn btn-primary" onclick="showAddForm()">Tambah Fasilitas</button>
    </div>

    <!-- Form Tambah/Edit -->
    <div id="formContainer" class="form-container" style="display: none;">
        <div class="form-card">
            <h3 id="formTitle">Tambah Fasilitas</h3>
            <form id="fasilitasForm" method="POST" action="<?= BASE_URL ?>/admin/fasilitas/save">
                <input type="hidden" id="editId" name="id" value="">
                
                <div class="form-group">
                    <label for="nama_fasilitas">Nama Fasilitas:</label>
                    <input type="text" id="nama_fasilitas" name="nama_fasilitas" required class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="jenis">Kategori:</label>
                    <select id="jenis" name="jenis" required class="form-control">
                        <option value="">Pilih Kategori</option>
                        <option value="pendidikan">Pendidikan</option>
                        <option value="kesehatan">Kesehatan</option>
                        <option value="ibadah">Ibadah</option>
                        <option value="balai">Balai Warga</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea id="alamat" name="alamat" required class="form-control" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea id="deskripsi" name="deskripsi" class="form-control" rows="4"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="kontak">Kontak:</label>
                    <input type="text" id="kontak" name="kontak" class="form-control">
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" onclick="hideForm()">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Filter Kategori -->
    <div class="filter-container">
        <label for="filterKategori">Filter Kategori:</label>
        <select id="filterKategori" onchange="filterTable()" class="form-control">
            <option value="">Semua Kategori</option>
            <option value="pendidikan">Pendidikan</option>
            <option value="kesehatan">Kesehatan</option>
            <option value="ibadah">Ibadah</option>
            <option value="balai">Balai Warga</option>
        </select>
    </div>

    <!-- Tabel Data -->
    <div class="table-container">
        <table border="1" cellpadding="8" style="margin-top:16px;width:100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Fasilitas</th>
                    <th>Kategori</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="fasilitasTableBody">
                <tr data-kategori="balai">
                    <td>1</td>
                    <td>Balai Warga</td>
                    <td><span class="badge badge-primary">Balai Warga</span></td>
                    <td>Jl. Kp. Ciater II No.007/02</td>
                    <td>+62 123-4567-89</td>
                    <td>
                        <button class="btn btn-warning" onclick="editData(1, 'Balai Warga', 'balai', 'Jl. Kp. Ciater II No.007/02', 'Balai warga untuk kegiatan masyarakat', '+62 123-4567-89')">Edit</button>
                        <button class="btn btn-danger" onclick="deleteData(1)">Hapus</button>
                    </td>
                </tr>
                <tr data-kategori="ibadah">
                    <td>2</td>
                    <td>Masjid Al-Ikhlas</td>
                    <td><span class="badge badge-success">Ibadah</span></td>
                    <td>Jl. Kp. Ciater II No.010</td>
                    <td>+62 123-4567-90</td>
                    <td>
                        <button class="btn btn-warning" onclick="editData(2, 'Masjid Al-Ikhlas', 'ibadah', 'Jl. Kp. Ciater II No.010', 'Masjid untuk ibadah umat Islam', '+62 123-4567-90')">Edit</button>
                        <button class="btn btn-danger" onclick="deleteData(2)">Hapus</button>
                    </td>
                </tr>
                <tr data-kategori="kesehatan">
                    <td>3</td>
                    <td>Puskesmas Sehat</td>
                    <td><span class="badge badge-info">Kesehatan</span></td>
                    <td>Jl. Kp. Ciater II No.015</td>
                    <td>+62 123-4567-91</td>
                    <td>
                        <button class="btn btn-warning" onclick="editData(3, 'Puskesmas Sehat', 'kesehatan', 'Jl. Kp. Ciater II No.015', 'Puskesmas untuk layanan kesehatan masyarakat', '+62 123-4567-91')">Edit</button>
                        <button class="btn btn-danger" onclick="deleteData(3)">Hapus</button>
                    </td>
                </tr>
                <tr data-kategori="pendidikan">
                    <td>4</td>
                    <td>Sekolah Dasar 01</td>
                    <td><span class="badge badge-warning">Pendidikan</span></td>
                    <td>Jl. Kp. Ciater II No.020</td>
                    <td>+62 123-4567-92</td>
                    <td>
                        <button class="btn btn-warning" onclick="editData(4, 'Sekolah Dasar 01', 'pendidikan', 'Jl. Kp. Ciater II No.020', 'Sekolah dasar untuk pendidikan anak', '+62 123-4567-92')">Edit</button>
                        <button class="btn btn-danger" onclick="deleteData(4)">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
function showAddForm() {
    document.getElementById('formContainer').style.display = 'block';
    document.getElementById('formTitle').textContent = 'Tambah Fasilitas';
    document.getElementById('fasilitasForm').reset();
    document.getElementById('editId').value = '';
}

function hideForm() {
    document.getElementById('formContainer').style.display = 'none';
}

function editData(id, nama_fasilitas, jenis, alamat, deskripsi, kontak) {
    document.getElementById('formContainer').style.display = 'block';
    document.getElementById('formTitle').textContent = 'Edit Fasilitas';
    document.getElementById('editId').value = id;
    document.getElementById('nama_fasilitas').value = nama_fasilitas;
    document.getElementById('jenis').value = jenis;
    document.getElementById('alamat').value = alamat;
    document.getElementById('deskripsi').value = deskripsi;
    document.getElementById('kontak').value = kontak;
}

function deleteData(id) {
    if (confirm('Apakah Anda yakin ingin menghapus fasilitas ini?')) {
        // Implementasi delete
        alert('Fasilitas berhasil dihapus!');
        // Reload halaman atau update tabel
    }
}

function filterTable() {
    const filter = document.getElementById('filterKategori').value;
    const rows = document.querySelectorAll('#fasilitasTableBody tr');
    
    rows.forEach(row => {
        if (filter === '' || row.getAttribute('data-kategori') === filter) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}
</script>
</body>
</html> 