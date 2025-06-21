# Dokumentasi Routing Admin

## Overview
Sistem admin telah dipisahkan dari routing user untuk menghindari konflik dan memudahkan pengelolaan.

## URL Structure

### Admin URLs
- `http://localhost/Project-KP/admin` → Dashboard Admin
- `http://localhost/Project-KP/admin/dashboard` → Dashboard Admin
- `http://localhost/Project-KP/admin/strukturOrganisasi` → Manajemen Struktur Organisasi
- `http://localhost/Project-KP/admin/fasilitas` → Manajemen Fasilitas
- `http://localhost/Project-KP/admin/berita` → Manajemen Berita

### User URLs
- `http://localhost/Project-KP/` → Beranda User
- `http://localhost/Project-KP/pelayanan` → Layanan Masyarakat
- `http://localhost/Project-KP/berita` → Berita User
- dll.

## File Structure

### Admin Files
- `public/admin.php` → Entry point untuk admin
- `app/Controllers/AdminController.php` → Controller admin
- `app/Views/admin/` → View admin
- `public/css/admin.css` → CSS admin

### User Files
- `public/index.php` → Entry point untuk user
- `app/Controllers/` → Controller user
- `app/Views/` → View user
- `public/css/` → CSS user

## Routing Logic

### Admin Routing
1. URL `admin/method` diproses oleh `public/admin.php`
2. `AdminController` dipanggil dengan method yang sesuai
3. View admin dirender dengan layout admin

### User Routing
1. URL user diproses oleh `public/index.php`
2. Controller user dipanggil sesuai URL
3. View user dirender dengan layout user

## Keuntungan Pemisahan

1. **Tidak ada konflik routing** antara admin dan user
2. **Keamanan lebih baik** - admin terpisah dari user
3. **Maintenance lebih mudah** - kode admin dan user terpisah
4. **Scalability** - mudah menambah fitur admin baru

## Troubleshooting

### Jika admin tidak bisa diakses:
1. Pastikan `.htaccess` di root folder sudah benar
2. Pastikan `public/admin.php` ada dan benar
3. Pastikan `AdminController.php` ada dan benar
4. Periksa error log Apache

### Jika CSS admin tidak muncul:
1. Pastikan `BASE_URL` sudah benar di `Constants.php`
2. Pastikan path CSS di view admin sudah benar
3. Periksa apakah file CSS ada di `public/css/admin.css` 