-- Buat database
CREATE DATABASE IF NOT EXISTS db_kelurahan;
USE db_kelurahan;

-- Tabel Pengguna
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    role ENUM('admin', 'staff') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel Berita
CREATE TABLE berita (
    id INT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(200) NOT NULL,
    konten TEXT NOT NULL,
    gambar VARCHAR(255),
    tanggal_publish DATE NOT NULL,
    created_by INT,
    FOREIGN KEY (created_by) REFERENCES users(id)
);

-- Tabel Layanan
CREATE TABLE layanan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama_layanan VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    persyaratan TEXT,
    biaya DECIMAL(10,2),
    estimasi_waktu VARCHAR(50)
);

-- Tabel Pengaduan
CREATE TABLE pengaduan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama_pelapor VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    telepon VARCHAR(20),
    judul VARCHAR(200) NOT NULL,
    isi_pengaduan TEXT NOT NULL,
    status ENUM('pending', 'proses', 'selesai') DEFAULT 'pending',
    tanggal_pengaduan TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel Agenda
CREATE TABLE agenda (
    id INT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(200) NOT NULL,
    deskripsi TEXT,
    tanggal_mulai DATETIME NOT NULL,
    tanggal_selesai DATETIME NOT NULL,
    lokasi VARCHAR(200),
    created_by INT,
    FOREIGN KEY (created_by) REFERENCES users(id)
);

-- Tabel Struktur Organisasi
CREATE TABLE struktur_organisasi (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    jabatan VARCHAR(100) NOT NULL,
    foto VARCHAR(255),
    urutan INT NOT NULL
);

-- Insert data awal untuk admin
INSERT INTO users (username, password, nama_lengkap, role) 
VALUES ('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Administrator', 'admin');

-- Insert data layanan umum
INSERT INTO `layanan` (`id`, `nama_layanan`, `deskripsi`, `persyaratan`, `biaya`, `estimasi_waktu`) VALUES
(1, 'KTP', 'Pembuatan Kartu Tanda Penduduk', '1. Berusia 17 tahun\n2. Fotokopi Kartu Keluarga\n3. Surat Pengantar RT/RW', 0.00, '1-3 hari kerja'),
(2, 'KK', 'Pembuatan Kartu Keluarga', '1. Surat Nikah\n2. KTP Suami/Istri\n3. Surat Pengantar RT/RW', 0.00, '1-3 hari kerja'),
(3, 'KIA', 'Pembuatan Kartu Identitas Anak', '1. Fotocopy Kartu Keluarga\r\n2. Fotocopy KTP orang tua\r\n3. Fotocopy Akta Kelahiran anak\r\n4. foto anak berukuran 2x3 2 lembar', 0.00, '1-5 hari kerja'); 