<?php
$base_url = '../';
require_once '../config.php';
require_once '../navbar.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Balai Desa - Kelurahan Lengkong Wetan</title>
    <link rel="stylesheet" href="../css/utama.css">
    <link rel="stylesheet" href="../css/fasilitas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <main class="container">
        <section class="facility-section">
            <h2>Fasilitas Balai Desa</h2>
            <div class="facility-grid">
                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/balai-utama.jpg" alt="Balai Utama">
                    <div class="facility-info">
                        <h3>Balai Utama Kelurahan</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 90</p>
                        <p><i class="fas fa-phone"></i> (021) 543-IIII</p>
                        <p><i class="fas fa-clock"></i> Senin - Jumat: 08:00 - 16:00</p>
                        <p>Balai utama untuk kegiatan administrasi dan pelayanan masyarakat.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/balai-pertemuan.jpg" alt="Balai Pertemuan">
                    <div class="facility-info">
                        <h3>Balai Pertemuan</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 91</p>
                        <p><i class="fas fa-phone"></i> (021) 543-JJJJ</p>
                        <p><i class="fas fa-clock"></i> Setiap Hari: 08:00 - 21:00</p>
                        <p>Ruang pertemuan dengan kapasitas 200 orang untuk berbagai acara.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/balai-kesehatan.jpg" alt="Balai Kesehatan">
                    <div class="facility-info">
                        <h3>Balai Kesehatan</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 92</p>
                        <p><i class="fas fa-phone"></i> (021) 543-KKKK</p>
                        <p><i class="fas fa-clock"></i> Senin - Jumat: 08:00 - 16:00</p>
                        <p>Fasilitas kesehatan dasar dan posyandu untuk warga.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/balai-olahraga.jpg" alt="Balai Olahraga">
                    <div class="facility-info">
                        <h3>Balai Olahraga</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 93</p>
                        <p><i class="fas fa-phone"></i> (021) 543-LLLL</p>
                        <p><i class="fas fa-clock"></i> Setiap Hari: 06:00 - 21:00</p>
                        <p>Fasilitas olahraga indoor dengan berbagai peralatan olahraga.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once '../footer.php'; ?>
</body>
</html> 