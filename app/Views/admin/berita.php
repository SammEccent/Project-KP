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
</head>
<body>
<?php include 'sidebar.php'; ?>
<div class="main" id="main">
    <div class="page-header">
        <h2>Manajemen Berita</h2>
        <button class="btn btn-primary" onclick="showAddForm()">Tambah Berita</button>
    </div>

    <!-- Form Tambah/Edit -->
    <div id="formContainer" class="form-container" style="display: none;">
        <div class="form-card">
            <h3 id="formTitle">Tambah Berita</h3>
            <form id="beritaForm" method="POST" action="<?= BASE_URL ?>/admin/berita/save" enctype="multipart/form-data">
                <input type="hidden" id="editId" name="id" value="">
                
                <div class="form-group">
                    <label for="judul">Judul Berita:</label>
                    <input type="text" id="judul" name="judul" required class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="kategori">Kategori:</label>
                    <select id="kategori" name="kategori" required class="form-control">
                        <option value="">Pilih Kategori</option>
                        <option value="pemerintahan">Pemerintahan</option>
                        <option value="kesehatan">Kesehatan</option>
                        <option value="pendidikan">Pendidikan</option>
                        <option value="sosial">Sosial</option>
                        <option value="ekonomi">Ekonomi</option>
                        <option value="lingkungan">Lingkungan</option>
                        <option value="umum">Umum</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="gambar">Gambar Berita:</label>
                    <input type="file" id="gambar" name="gambar" accept="image/*" class="form-control">
                    <small class="form-text">Format: JPG, PNG, GIF. Maksimal 2MB</small>
                </div>
                
                <div class="form-group">
                    <label for="ringkasan">Ringkasan:</label>
                    <textarea id="ringkasan" name="ringkasan" required class="form-control" rows="3" maxlength="200"></textarea>
                    <small class="form-text">Maksimal 200 karakter</small>
                </div>
                
                <div class="form-group">
                    <label for="isi">Isi Berita:</label>
                    <textarea id="isi" name="isi" required class="form-control" rows="10"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="penulis">Penulis:</label>
                    <input type="text" id="penulis" name="penulis" required class="form-control">
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
                    <button type="button" class="btn btn-secondary" onclick="hideForm()">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Filter dan Pencarian -->
    <div class="filter-container">
        <div class="filter-row">
            <div class="filter-group">
                <label for="filterKategori">Filter Kategori:</label>
                <select id="filterKategori" onchange="filterTable()" class="form-control">
                    <option value="">Semua Kategori</option>
                    <option value="pemerintahan">Pemerintahan</option>
                    <option value="kesehatan">Kesehatan</option>
                    <option value="pendidikan">Pendidikan</option>
                    <option value="sosial">Sosial</option>
                    <option value="ekonomi">Ekonomi</option>
                    <option value="lingkungan">Lingkungan</option>
                    <option value="umum">Umum</option>
                </select>
            </div>
            <div class="filter-group">
                <label for="filterStatus">Filter Status:</label>
                <select id="filterStatus" onchange="filterTable()" class="form-control">
                    <option value="">Semua Status</option>
                    <option value="published">Published</option>
                    <option value="draft">Draft</option>
                </select>
            </div>
            <div class="filter-group">
                <label for="searchBerita">Cari:</label>
                <input type="text" id="searchBerita" placeholder="Cari judul berita..." onkeyup="searchTable()" class="form-control">
            </div>
        </div>
    </div>

    <!-- Tabel Data -->
    <div class="table-container">
        <table border="1" cellpadding="8" style="margin-top:16px;width:100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="beritaTableBody">
                <tr data-kategori="pemerintahan" data-status="published">
                    <td>1</td>
                    <td><img src="<?= BASE_URL ?>/public/img/berita1.jpg" alt="Berita 1" style="width:50px;height:50px;object-fit:cover;"></td>
                    <td>Peresmian Balai Warga</td>
                    <td><span class="badge badge-primary">Pemerintahan</span></td>
                    <td>Admin Kelurahan</td>
                    <td>2024-06-01</td>
                    <td><span class="badge badge-success">Published</span></td>
                    <td>
                        <button class="btn btn-info" onclick="viewData(1)">Lihat</button>
                        <button class="btn btn-warning" onclick="editData(1, 'Peresmian Balai Warga', 'pemerintahan', 'Peresmian balai warga baru untuk kegiatan masyarakat', 'Berita lengkap tentang peresmian balai warga...', 'Admin Kelurahan', 'published')">Edit</button>
                        <button class="btn btn-danger" onclick="deleteData(1)">Hapus</button>
                    </td>
                </tr>
                <tr data-kategori="sosial" data-status="published">
                    <td>2</td>
                    <td><img src="<?= BASE_URL ?>/public/img/berita2.jpg" alt="Berita 2" style="width:50px;height:50px;object-fit:cover;"></td>
                    <td>Pengajian Rutin</td>
                    <td><span class="badge badge-info">Sosial</span></td>
                    <td>Admin Kelurahan</td>
                    <td>2024-05-20</td>
                    <td><span class="badge badge-success">Published</span></td>
                    <td>
                        <button class="btn btn-info" onclick="viewData(2)">Lihat</button>
                        <button class="btn btn-warning" onclick="editData(2, 'Pengajian Rutin', 'sosial', 'Pengajian rutin di masjid kelurahan', 'Berita lengkap tentang pengajian rutin...', 'Admin Kelurahan', 'published')">Edit</button>
                        <button class="btn btn-danger" onclick="deleteData(2)">Hapus</button>
                    </td>
                </tr>
                <tr data-kategori="kesehatan" data-status="published">
                    <td>3</td>
                    <td><img src="<?= BASE_URL ?>/public/img/berita3.jpg" alt="Berita 3" style="width:50px;height:50px;object-fit:cover;"></td>
                    <td>Pemeriksaan Kesehatan Gratis</td>
                    <td><span class="badge badge-success">Kesehatan</span></td>
                    <td>Admin Kelurahan</td>
                    <td>2024-05-10</td>
                    <td><span class="badge badge-success">Published</span></td>
                    <td>
                        <button class="btn btn-info" onclick="viewData(3)">Lihat</button>
                        <button class="btn btn-warning" onclick="editData(3, 'Pemeriksaan Kesehatan Gratis', 'kesehatan', 'Pemeriksaan kesehatan gratis untuk warga', 'Berita lengkap tentang pemeriksaan kesehatan...', 'Admin Kelurahan', 'published')">Edit</button>
                        <button class="btn btn-danger" onclick="deleteData(3)">Hapus</button>
                    </td>
                </tr>
                <tr data-kategori="pendidikan" data-status="draft">
                    <td>4</td>
                    <td><img src="<?= BASE_URL ?>/public/img/berita4.jpg" alt="Berita 4" style="width:50px;height:50px;object-fit:cover;"></td>
                    <td>Program Beasiswa untuk Anak Berprestasi</td>
                    <td><span class="badge badge-warning">Pendidikan</span></td>
                    <td>Admin Kelurahan</td>
                    <td>2024-05-05</td>
                    <td><span class="badge badge-secondary">Draft</span></td>
                    <td>
                        <button class="btn btn-info" onclick="viewData(4)">Lihat</button>
                        <button class="btn btn-warning" onclick="editData(4, 'Program Beasiswa untuk Anak Berprestasi', 'pendidikan', 'Program beasiswa untuk anak berprestasi', 'Berita lengkap tentang program beasiswa...', 'Admin Kelurahan', 'draft')">Edit</button>
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
    document.getElementById('formTitle').textContent = 'Tambah Berita';
    document.getElementById('beritaForm').reset();
    document.getElementById('editId').value = '';
}

function hideForm() {
    document.getElementById('formContainer').style.display = 'none';
}

function editData(id, judul, kategori, ringkasan, isi, penulis, status) {
    document.getElementById('formContainer').style.display = 'block';
    document.getElementById('formTitle').textContent = 'Edit Berita';
    document.getElementById('editId').value = id;
    document.getElementById('judul').value = judul;
    document.getElementById('kategori').value = kategori;
    document.getElementById('ringkasan').value = ringkasan;
    document.getElementById('isi').value = isi;
    document.getElementById('penulis').value = penulis;
    document.getElementById('status').value = status;
}

function viewData(id) {
    // Implementasi view berita
    alert('Melihat berita dengan ID: ' + id);
}

function deleteData(id) {
    if (confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
        // Implementasi delete
        alert('Berita berhasil dihapus!');
        // Reload halaman atau update tabel
    }
}

function filterTable() {
    const kategoriFilter = document.getElementById('filterKategori').value;
    const statusFilter = document.getElementById('filterStatus').value;
    const rows = document.querySelectorAll('#beritaTableBody tr');
    
    rows.forEach(row => {
        const kategori = row.getAttribute('data-kategori');
        const status = row.getAttribute('data-status');
        
        const kategoriMatch = kategoriFilter === '' || kategori === kategoriFilter;
        const statusMatch = statusFilter === '' || status === statusFilter;
        
        if (kategoriMatch && statusMatch) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

function searchTable() {
    const searchTerm = document.getElementById('searchBerita').value.toLowerCase();
    const rows = document.querySelectorAll('#beritaTableBody tr');
    
    rows.forEach(row => {
        const judul = row.cells[2].textContent.toLowerCase();
        if (judul.includes(searchTerm)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}
</script>
</body>
</html> 