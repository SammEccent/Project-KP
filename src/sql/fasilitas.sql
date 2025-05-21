-- Membuat tabel fasilitas_kesehatan
CREATE TABLE IF NOT EXISTS `fasilitas_kesehatan` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nama_fasilitas` varchar(100) NOT NULL,
    `jenis_fasilitas` enum('Rumah Sakit','Puskesmas','Klinik','Apotek','Praktik Dokter','Praktik Bidan') NOT NULL,
    `alamat` text NOT NULL,
    `kontak` varchar(20) NOT NULL,
    `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuat tabel fasilitas_pendidikan
CREATE TABLE IF NOT EXISTS `fasilitas_pendidikan` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nama_fasilitas` varchar(100) NOT NULL,
    `jenis_fasilitas` enum('TK','SD','SMP','SMA','SMK','Perguruan Tinggi','Lembaga Kursus','Perpustakaan') NOT NULL,
    `alamat` text NOT NULL,
    `kontak` varchar(20) NOT NULL,
    `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuat tabel fasilitas_ibadah
CREATE TABLE IF NOT EXISTS `fasilitas_ibadah` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nama_fasilitas` varchar(100) NOT NULL,
    `jenis_fasilitas` enum('Masjid','Musholla','Gereja','Vihara','Pura','Klenteng') NOT NULL,
    `alamat` text NOT NULL,
    `kontak` varchar(20) NOT NULL,
    `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuat tabel fasilitas_balai
CREATE TABLE IF NOT EXISTS `fasilitas_balai` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nama_fasilitas` varchar(100) NOT NULL,
    `jenis_fasilitas` enum('Balai Desa','Aula','Lapangan','Posyandu','Pos Kamling','Taman') NOT NULL,
    `alamat` text NOT NULL,
    `kontak` varchar(20) NOT NULL,
    `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Menambahkan data contoh untuk fasilitas_kesehatan
INSERT INTO `fasilitas_kesehatan` (`nama_fasilitas`, `jenis_fasilitas`, `alamat`, `kontak`) VALUES
('Puskesmas Lengkong Wetan', 'Puskesmas', 'Jl. Lengkong Wetan No. 123', '(021) 543-XXXX'),
('Klinik Sehat', 'Klinik', 'Jl. Lengkong Wetan No. 45', '(021) 543-YYYY'),
('Apotek Sejahtera', 'Apotek', 'Jl. Lengkong Wetan No. 67', '(021) 543-ZZZZ');

-- Menambahkan data contoh untuk fasilitas_pendidikan
INSERT INTO `fasilitas_pendidikan` (`nama_fasilitas`, `jenis_fasilitas`, `alamat`, `kontak`) VALUES
('SDN Lengkong Wetan 01', 'SD', 'Jl. Lengkong Wetan No. 10', '(021) 543-AAAA'),
('SMPN 123 Lengkong Wetan', 'SMP', 'Jl. Lengkong Wetan No. 20', '(021) 543-BBBB'),
('SMAN 45 Lengkong Wetan', 'SMA', 'Jl. Lengkong Wetan No. 30', '(021) 543-CCCC'),
('Perpustakaan Umum Lengkong Wetan', 'Perpustakaan', 'Jl. Lengkong Wetan No. 40', '(021) 543-DDDD');

-- Menambahkan data contoh untuk fasilitas_ibadah
INSERT INTO `fasilitas_ibadah` (`nama_fasilitas`, `jenis_fasilitas`, `alamat`, `kontak`) VALUES
('Masjid Al-Hidayah', 'Masjid', 'Jl. Lengkong Wetan No. 50', '(021) 543-EEEE'),
('Gereja Kristen Indonesia', 'Gereja', 'Jl. Lengkong Wetan No. 60', '(021) 543-FFFF'),
('Vihara Dharma Bhakti', 'Vihara', 'Jl. Lengkong Wetan No. 70', '(021) 543-GGGG'),
('Pura Agung Jagatnatha', 'Pura', 'Jl. Lengkong Wetan No. 80', '(021) 543-HHHH');

-- Menambahkan data contoh untuk fasilitas_balai
INSERT INTO `fasilitas_balai` (`nama_fasilitas`, `jenis_fasilitas`, `alamat`, `kontak`) VALUES
('Balai Utama Kelurahan', 'Balai Desa', 'Jl. Lengkong Wetan No. 90', '(021) 543-IIII'),
('Balai Pertemuan', 'Aula', 'Jl. Lengkong Wetan No. 91', '(021) 543-JJJJ'),
('Balai Kesehatan', 'Posyandu', 'Jl. Lengkong Wetan No. 92', '(021) 543-KKKK'),
('Lapangan Olahraga', 'Lapangan', 'Jl. Lengkong Wetan No. 93', '(021) 543-LLLL'); 