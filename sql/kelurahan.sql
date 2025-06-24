-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2025 pada 19.51
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelurahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('superadmin','editor') NOT NULL DEFAULT 'editor',
  `terakhir_login` datetime DEFAULT NULL,
  `dibuat_pada` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password_hash`, `nama_lengkap`, `email`, `role`, `terakhir_login`, `dibuat_pada`) VALUES
(1, 'superadmin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Admin Utama', 'superadmin@kelurahan.id', 'superadmin', NULL, '2025-06-23 23:00:16'),
(2, 'editor1', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Editor Pertama', 'editor1@kelurahan.id', 'editor', NULL, '2025-06-23 23:00:16'),
(3, 'editor2', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Editor Kedua', 'editor2@kelurahan.id', 'editor', NULL, '2025-06-23 23:00:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL COMMENT 'Path relatif foto profil',
  `kontak` varchar(100) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `dibuat_pada` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `foto`, `kontak`, `bio`, `status`, `dibuat_pada`) VALUES
(1, 'H. Ahmad Subagja', 'uploads/profil/ahmad.jpg', '08123456789', NULL, 'active', '2025-06-23 16:38:25'),
(2, 'Dewi Lestari', 'uploads/profil/dewi.jpg', '08234567890', NULL, 'active', '2025-06-23 16:38:25'),
(3, 'Budi Santoso', 'uploads/profil/budi.jpg', '08345678901', NULL, 'active', '2025-06-23 16:38:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_pendek` text NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `status` enum('draft','published','archived') NOT NULL DEFAULT 'draft',
  `tanggal_publish` datetime DEFAULT NULL,
  `dibuat_pada` datetime NOT NULL DEFAULT current_timestamp(),
  `diupdate_pada` datetime DEFAULT NULL,
  `is_headline` tinyint(1) DEFAULT 0 COMMENT 'Menandakan apakah berita ini adalah berita utama',
  `view_count` int(11) DEFAULT 0 COMMENT 'Jumlah pembaca untuk berita ini',
  `published_at` datetime DEFAULT current_timestamp() COMMENT 'Waktu publikasi berita'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `slug`, `judul`, `isi_pendek`, `kategori_id`, `admin_id`, `status`, `tanggal_publish`, `dibuat_pada`, `diupdate_pada`, `is_headline`, `view_count`, `published_at`) VALUES
(1, 'pembangunan-jalan-desa', 'Pembangunan Jalan Desa Tahun 2024', 'Pemerintah Kelurahan memulai proyek pembangunan jalan sepanjang 2km untuk menghubungkan RW 01 dan RW 03.', 1, 1, 'published', '2025-06-23 23:02:17', '2025-06-23 23:02:17', NULL, 1, 136, '2025-06-24 00:17:48'),
(2, 'rencana-program-kerja', 'Rencana Program Kerja 2024', 'Program kerja desa untuk tahun 2024 telah disusun dan akan dilaksanakan mulai bulan depan.', 2, 2, 'published', '2025-06-23 23:02:17', '2025-06-23 23:02:17', NULL, 0, 59, '2025-06-24 00:17:48'),
(3, 'kegiatan-gotong-royong', 'Kegiatan Gotong Royong Masyarakat', 'Warga desa akan melaksanakan gotong royong untuk membersihkan lingkungan pada akhir pekan.', 3, 1, 'draft', NULL, '2025-06-23 23:02:17', NULL, 0, 86, '2025-06-24 00:17:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_content`
--

CREATE TABLE `berita_content` (
  `id` int(11) NOT NULL,
  `berita_id` int(11) NOT NULL,
  `content_type` enum('text','image','video_embed') NOT NULL,
  `content` text NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT 0,
  `caption` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita_content`
--

INSERT INTO `berita_content` (`id`, `berita_id`, `content_type`, `content`, `ordering`, `caption`) VALUES
(1, 1, 'text', 'Pembangunan jalan ini memiliki tujuan utama untuk secara signifikan meningkatkan aksesibilitas dan konektivitas antar Rukun Warga (RW), sebuah langkah krusial dalam mendukung perkembangan sosial dan ekonomi di Tangerang, Banten. Dengan infrastruktur jalan yang lebih baik dan terhubung, warga akan merasakan kemudahan mobilitas yang luar biasa, baik untuk aktivitas sehari-hari seperti bekerja, sekolah, atau mengakses fasilitas kesehatan. Hal ini tidak hanya mempersingkat waktu tempuh, tetapi juga mengurangi kemacetan, sehingga kualitas hidup masyarakat dapat meningkat secara keseluruhan.\nLebih dari sekadar mempermudah pergerakan, proyek jalan ini juga diharapkan mampu menjadi katalisator bagi pertumbuhan ekonomi lokal. Konektivitas yang lebih baik antar RW akan memperlancar distribusi barang dan jasa, membuka akses pasar yang lebih luas bagi para pelaku Usaha Mikro, Kecil, dan Menengah (UMKM) yang tersebar di berbagai sudut kota. Para pedagang di pasar tradisional maupun online akan lebih mudah mengirimkan produk mereka, sementara konsumen juga memiliki lebih banyak pilihan akses ke berbagai layanan, pada akhirnya menciptakan ekosistem ekonomi yang lebih dinamis dan inklusif di Tangerang.\nPada akhirnya, peningkatan aksesibilitas dan konektivitas ini akan mempererat jalinan sosial antar komunitas. Dengan kemudahan akses, interaksi antar warga dari RW yang berbeda akan meningkat, mendorong kolaborasi dan semangat kebersamaan dalam berbagai kegiatan sosial atau budaya. Ini adalah investasi jangka panjang yang tidak hanya berfokus pada infrastruktur fisik, tetapi juga berdampak positif pada kohesi sosial dan kemandirian ekonomi masyarakat, menjadikan Tangerang sebagai kota yang lebih terhubung, maju, dan sejahtera bagi seluruh warganya.', 1, NULL),
(2, 1, 'image', 'img/uploads/berita.png', 2, 'Gambar pembangunan jalan desa'),
(3, 1, 'video_embed', 'https://www.youtube.com/embed/du7RdszMldE?si=hkq5AKzmP0dTQmWb', 3, 'Video dokumentasi pembangunan jalan'),
(4, 2, 'text', 'Program kerja ini mencakup berbagai kegiatan yang akan dilaksanakan sepanjang tahun.', 1, NULL),
(5, 2, 'image', 'C:xampp/htdocs/Project-KP/public/img/upload/berita.png', 2, 'Gambar rapat persiapan program kerja'),
(6, 3, 'text', 'Kegiatan ini diharapkan dapat meningkatkan kebersihan dan kesehatan lingkungan.', 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(50) DEFAULT NULL,
  `link_map` text NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `dibuat_pada` datetime NOT NULL DEFAULT current_timestamp(),
  `diupdate_pada` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `slug`, `jenis_id`, `alamat`, `kontak`, `link_map`, `deskripsi`, `admin_id`, `dibuat_pada`, `diupdate_pada`) VALUES
(1, 'SMP Plus Berkualitas Lengkong Mandiri', 'SMP-Plus-BLM', 1, 'Jl. BSD Bintaro, RT.04/RW.10, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', '02153191957', 'https://maps.app.goo.gl/s92Z7tke8kex4DAS8', NULL, 1, '2025-06-25 00:17:29', NULL),
(2, 'SMKS Plus Berkualitas Lengkong Mandiri', 'SMKS-Plus-BLM', 1, 'Jl. BSD Bintaro, RT.04/RW.10, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', '02153191957', 'https://maps.app.goo.gl/8y6czLwshcK6Ksgw7', NULL, 2, '2025-06-25 00:23:44', NULL),
(3, 'SDN Lengkong Wetan 01', 'SDN-lengkong-wetan-01', 1, 'Jl. Lengkong Wetan, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', NULL, 'https://maps.app.goo.gl/m3LSZFsnFGFNrvyz5', NULL, 1, '2025-06-25 00:26:28', NULL),
(4, 'SDN Lengkong Wetan 02', 'SDN-Lengkong-Wetan-02', 1, 'Jl. BSD Bintaro No.32, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', '081255528425', 'https://maps.app.goo.gl/wnyHuYhmQaMjCFaFA', NULL, 1, '2025-06-25 00:28:13', NULL),
(5, 'MAS Nur As-Sholihat', 'MAS-Nur-As-Sholihat', 1, 'Jalan Kampung Perigi, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', '085121918086', 'https://maps.app.goo.gl/MovjAvSsf3pj9fmUA', NULL, 2, '2025-06-25 00:30:19', NULL),
(6, 'Masjid Jami\'Al-Hidayah', 'Masjid-Jami\'Al-Hidayah', 3, 'Jl. Lengkong Wetan, Lengkong Karya, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15310', NULL, 'https://maps.app.goo.gl/WJwsasi8CUhn9UML6', NULL, 1, '2025-06-25 00:33:57', NULL),
(7, 'Masjid Al Istiqomah', 'Masjid-Al-Istiqomah', 3, 'Jl. Gn. Sumbing No.Blok E, RT.2/RW.Giriloka 1, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15322', '087877559355', 'https://maps.app.goo.gl/v3cfHFiKm3HN4DHG9', NULL, 1, '2025-06-25 00:35:13', NULL),
(8, 'Masjid Jami\' Al-Kautsar', 'Masjid-Jami\'-Al-Kautsar', 3, 'Jl. Lengkong Wetan No.19, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', NULL, 'https://maps.app.goo.gl/Mbb7czq9v8p9dbYT9', NULL, 1, '2025-06-25 00:36:22', NULL),
(9, 'Masjid Jami Ar Rahmah', 'Masjid-Jami-Ar-Rahmah', 3, 'Jl. Raya Ciater No.50, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', NULL, 'https://maps.app.goo.gl/MNYf84aMPamRaYPb8', NULL, 1, '2025-06-25 00:37:45', NULL),
(10, 'Masjid Jami An Nur', 'Masjid-Jami-An-Nur', 3, 'Jl. Manunggal No.54, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', NULL, 'https://maps.app.goo.gl/vv6wZ69LuT1RowB67', NULL, 1, '2025-06-25 00:39:26', NULL),
(11, 'Puskesmas Lengkong Wetan', 'Puskesmas-Lengkong-Wetan', 2, 'Jalan Perum GSB, RT.03/RW.09, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15322', '02122212020', 'https://maps.app.goo.gl/aLWv5R1FeDKEKNtL7', NULL, 1, '2025-06-25 00:42:01', NULL),
(12, 'RS Columbia Asia BSD', 'RS-Columbia-Asia-BSD', 2, 'BSD Serpong, Jl. Letnan Sutopo No.7 Kavling Komplek 3A, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', '0215372296', 'https://maps.app.goo.gl/zKHiKQChDu2gDMpBA', NULL, 1, '2025-06-25 00:43:29', NULL),
(13, 'Posyandu Mahoni', 'Posyandu-Mahoni', 2, 'Jl. Nn No.4, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', NULL, 'https://maps.app.goo.gl/7RFj7SoRTpbVG7qk9', NULL, 1, '2025-06-25 00:45:35', NULL),
(14, 'Proklamasi Bsd Hospital', 'Proklamasi-Bsd-Hospital', 2, 'Jl. Komp. BSD No.7, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', NULL, 'https://maps.app.goo.gl/rXxBAKXpYMhCmphdA', NULL, 1, '2025-06-25 00:46:36', NULL),
(15, 'Klinik Selaras Bsd', 'Klinik-Selaras-Bsd', 2, 'Jl. Pahlawan Seribu Ruko BSD Sektor IV, Bumi serpong Damai No.43-45 Blok E, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', '0215370310', 'https://maps.app.goo.gl/qC7VuZdkU13KVt327', NULL, 1, '2025-06-25 00:47:34', NULL),
(16, 'Balai Warga Giriloka 1', 'Balai-Warga-Giriloka-1', 4, 'Jl. Gn. Merbabu Blok J No.15, Lengkong Wetan, Serpong Sub-District, South Tangerang City, Banten 15310', NULL, 'https://maps.app.goo.gl/3tk38qwiszzFdv1VA', NULL, 1, '2025-06-25 00:48:56', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` int(11) NOT NULL COMMENT 'Tingkat dalam hierarki (1=tertinggi)',
  `deskripsi` text DEFAULT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama`, `level`, `deskripsi`, `dibuat_pada`) VALUES
(1, 'Lurah', 1, 'Pimpinan tertinggi kelurahan', '2025-06-23 16:38:25'),
(2, 'Sekretaris Kelurahan', 2, 'Penanggung jawab administrasi', '2025-06-23 16:38:25'),
(3, 'Kepala Seksi Pemerintahan', 3, 'Bidang pemerintahan', '2025-06-23 16:38:25'),
(4, 'Kepala Seksi Kesejahteraan', 3, 'Bidang kesejahteraan masyarakat', '2025-06-23 16:38:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `dibuat_oleh` int(11) NOT NULL,
  `dibuat_pada` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `nama`, `deskripsi`, `dibuat_oleh`, `dibuat_pada`) VALUES
(1, 'Pendidikan', 'Sekolah dan fasilitas pendidikan', 1, '2025-06-23 23:25:46'),
(2, 'Kesehatan', 'Fasilitas kesehatan', 1, '2025-06-23 23:25:46'),
(3, 'Ibadah', 'Tempat ibadah', 2, '2025-06-23 23:25:46'),
(4, 'Balai Warga', 'Ini balai warga', 1, '2025-06-24 15:28:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `dibuat_oleh` int(11) NOT NULL,
  `dibuat_pada` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `slug`, `nama`, `deskripsi`, `dibuat_oleh`, `dibuat_pada`) VALUES
(1, 'berita-desa', 'Berita Desa', 'Informasi seputar kegiatan desa', 1, '2025-06-23 23:01:18'),
(2, 'program-kerja', 'Program Kerja', 'Rencana kegiatan dan anggaran desa', 1, '2025-06-23 23:01:18'),
(3, 'kegiatan-masyarakat', 'Kegiatan Masyarakat', 'Kegiatan yang melibatkan masyarakat desa', 2, '2025-06-23 23:01:18'),
(4, 'berita-lokal', 'Berita Lokal', 'Berita terkait dengan peristiwa lokal di daerah.', 1, '2025-06-24 10:37:00'),
(5, 'acara-dan-pengumuman', 'Acara dan Pengumuman', 'Informasi tentang acara dan pengumuman penting.', 1, '2025-06-24 10:37:00'),
(6, 'kesehatan-dan-lingkungan', 'Kesehatan dan Lingkungan', 'Berita mengenai kesehatan dan isu lingkungan.', 1, '2025-06-24 10:37:00'),
(7, 'pendidikan-dan-pelatihan', 'Pendidikan dan Pelatihan', 'Informasi tentang pendidikan dan pelatihan yang tersedia.', 1, '2025-06-24 10:37:00'),
(8, 'inovasi-dan-teknologi', 'Inovasi dan Teknologi', 'Berita terbaru tentang inovasi dan teknologi.', 1, '2025-06-24 10:37:00'),
(9, 'sosialisasi-dan-penyuluhan', 'Sosialisasi dan Penyuluhan', 'Kegiatan sosialisasi dan penyuluhan yang dilakukan.', 1, '2025-06-24 10:37:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `anggota_id` int(11) DEFAULT NULL COMMENT 'Boleh kosong jika posisi lowong',
  `atasan_id` int(11) DEFAULT NULL COMMENT 'Referensi ke id tabel ini sendiri',
  `urutan` int(11) NOT NULL DEFAULT 1 COMMENT 'Urutan tampil dalam level yang sama',
  `dibuat_pada` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id`, `jabatan_id`, `anggota_id`, `atasan_id`, `urutan`, `dibuat_pada`) VALUES
(1, 1, 1, NULL, 1, '2025-06-23 16:38:25'),
(2, 2, 2, 1, 1, '2025-06-23 16:38:25'),
(3, 3, NULL, 2, 1, '2025-06-23 16:38:25'),
(4, 4, 3, 2, 2, '2025-06-23 16:38:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indeks untuk tabel `berita_content`
--
ALTER TABLE `berita_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `berita_id` (`berita_id`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `jenis_id` (`jenis_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dibuat_oleh` (`dibuat_oleh`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `dibuat_oleh` (`dibuat_oleh`);

--
-- Indeks untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jabatan_id` (`jabatan_id`),
  ADD KEY `anggota_id` (`anggota_id`),
  ADD KEY `atasan_id` (`atasan_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `berita_content`
--
ALTER TABLE `berita_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Ketidakleluasaan untuk tabel `berita_content`
--
ALTER TABLE `berita_content`
  ADD CONSTRAINT `berita_content_ibfk_1` FOREIGN KEY (`berita_id`) REFERENCES `berita` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`jenis_id`) REFERENCES `jenis` (`id`),
  ADD CONSTRAINT `fasilitas_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Ketidakleluasaan untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD CONSTRAINT `jenis_ibfk_1` FOREIGN KEY (`dibuat_oleh`) REFERENCES `admin` (`id`);

--
-- Ketidakleluasaan untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`dibuat_oleh`) REFERENCES `admin` (`id`);

--
-- Ketidakleluasaan untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD CONSTRAINT `struktur_organisasi_ibfk_1` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id`),
  ADD CONSTRAINT `struktur_organisasi_ibfk_2` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id`),
  ADD CONSTRAINT `struktur_organisasi_ibfk_3` FOREIGN KEY (`atasan_id`) REFERENCES `struktur_organisasi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
