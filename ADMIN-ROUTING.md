# Dokumentasi Routing Admin - Website Kelurahan Lengkong Wetan

## **Overview**

Halaman admin berfungsi sebagai CMS (Content Management System) untuk mengelola konten yang ditampilkan di halaman user. Admin dan user menggunakan routing terpisah untuk menghindari konflik.

## **Struktur Routing**

### **Admin Routes** (`/admin/`)

- **Dashboard**: `http://localhost/Project-KP/admin/dashboard`
- **Struktur Organisasi**: `http://localhost/Project-KP/admin/strukturOrganisasi`
- **Data Anggota**: `http://localhost/Project-KP/admin/anggota`
- **Fasilitas**: `http://localhost/Project-KP/admin/fasilitas`
- **Berita**: `http://localhost/Project-KP/admin/berita`

### **User Routes** (`/`)

- **Beranda**: `http://localhost/Project-KP/`
- **Pelayanan**: `http://localhost/Project-KP/pelayanan`
- **Berita**: `http://localhost/Project-KP/berita`
- **Profil**: `http://localhost/Project-KP/profil`

## **Fungsi CRUD Admin**

### **1. Struktur Organisasi**

**Tujuan**: Mengelola data struktur organisasi kelurahan yang ditampilkan di halaman user.

**Fitur**:

- ✅ Tambah data struktur organisasi
- ✅ Edit data struktur organisasi
- ✅ Hapus data struktur organisasi
- ✅ View data dalam tabel

**Field Data**:

- Jabatan (wajib)
- Nama Pejabat (wajib)
- Atasan (opsional)
- Urutan (wajib)

**URL Endpoints**:

- `GET /admin/strukturOrganisasi` - Halaman utama
- `POST /admin/strukturOrganisasi/save` - Simpan data (create/update)
- `GET /admin/strukturOrganisasi/delete/{id}` - Hapus data

### **2. Data Anggota**

**Tujuan**: Mengelola data anggota/pejabat kelurahan yang akan digunakan dalam struktur organisasi.

**Fitur**:

- ✅ Tambah data anggota baru
- ✅ Edit data anggota
- ✅ Hapus data anggota
- ✅ View data dalam tabel

**Field Data**:

- Nama Lengkap (wajib)
- NIP (opsional)
- Email (opsional)
- Telepon (opsional)
- Alamat (opsional)

**URL Endpoints**:

- `GET /admin/anggota` - Halaman utama
- `POST /admin/anggota/save` - Simpan data (create/update)
- `GET /admin/anggota/delete/{id}` - Hapus data

### **3. Fasilitas**

**Tujuan**: Mengelola data fasilitas di setiap kategori (pendidikan, kesehatan, ibadah, balai) yang ditampilkan di halaman user.

**Fitur**:

- ✅ Tambah fasilitas baru
- ✅ Edit data fasilitas
- ✅ Hapus fasilitas
- ✅ Filter berdasarkan kategori
- ✅ View data dalam tabel

**Field Data**:

- Nama Fasilitas (wajib)
- Kategori (wajib): pendidikan, kesehatan, ibadah, balai
- Alamat (wajib)
- Deskripsi (opsional)
- Kontak (opsional)

**URL Endpoints**:

- `GET /admin/fasilitas` - Halaman utama
- `POST /admin/fasilitas/save` - Simpan data (create/update)
- `GET /admin/fasilitas/delete/{id}` - Hapus data

### **4. Berita**

**Tujuan**: Mengelola berita yang ditampilkan di halaman berita user.

**Fitur**:

- ✅ Tambah berita baru
- ✅ Edit berita
- ✅ Hapus berita
- ✅ Upload gambar berita
- ✅ Filter berdasarkan kategori dan status
- ✅ Pencarian berita
- ✅ Status draft/published
- ✅ View data dalam tabel

**Field Data**:

- Judul Berita (wajib)
- Kategori (wajib): pemerintahan, kesehatan, pendidikan, sosial, ekonomi, lingkungan, umum
- Gambar Berita (opsional)
- Ringkasan (wajib, max 200 karakter)
- Isi Berita (wajib)
- Penulis (wajib)
- Status (wajib): draft, published

**URL Endpoints**:

- `GET /admin/berita` - Halaman utama
- `POST /admin/berita/save` - Simpan data (create/update)
- `GET /admin/berita/delete/{id}` - Hapus data

## **Konfigurasi File**

### **1. .htaccess (Root)**

```apache
RewriteEngine On
RewriteRule ^admin/(.*)$ public/admin.php [L]
RewriteRule ^(.*)$ public/index.php [L]
```

### **2. .htaccess (Public)**

```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
```

### **3. BASE_URL**

```php
// config/config.php
define('BASE_URL', 'http://localhost/Project-KP');
```

## **Struktur File Admin**

### **Controllers**

- `app/Controllers/AdminController.php` - Controller utama admin

### **Views**

- `app/Views/admin/dashboard.php` - Dashboard admin
- `app/Views/admin/strukturOrganisasi.php` - CRUD struktur organisasi
- `app/Views/admin/fasilitas.php` - CRUD fasilitas
- `app/Views/admin/berita.php` - CRUD berita
- `app/Views/admin/sidebar.php` - Sidebar admin

### **CSS**

- `public/css/admin.css` - Styling khusus admin

### **Routing**

- `public/admin.php` - Router khusus admin

## **Fitur UI/UX Admin**

### **Responsive Design**

- ✅ Sidebar yang bisa di-toggle
- ✅ Layout responsif untuk mobile
- ✅ Form yang user-friendly

### **Komponen UI**

- ✅ Form input dengan validasi
- ✅ Tabel data dengan aksi
- ✅ Filter dan pencarian
- ✅ Badge untuk status/kategori
- ✅ Button dengan warna yang konsisten
- ✅ Flash message untuk feedback

### **JavaScript Functions**

- ✅ Show/hide form
- ✅ Edit data dengan pre-fill form
- ✅ Delete dengan konfirmasi
- ✅ Filter tabel
- ✅ Search tabel

## **Database Integration (TODO)**

Saat ini menggunakan data dummy. Untuk implementasi lengkap, perlu:

1. Membuat model untuk setiap entitas
2. Implementasi database connection
3. Query CRUD operations
4. Data validation

## **Testing**

Untuk testing, akses:

1. `http://localhost/Project-KP/admin/dashboard`
2. Test setiap menu CRUD
3. Test form validation
4. Test responsive design
5. Test routing admin vs user

## **Keamanan (TODO)**

Untuk production, perlu ditambahkan:

1. Authentication system
2. Authorization (role-based access)
3. CSRF protection
4. Input sanitization
5. File upload validation
