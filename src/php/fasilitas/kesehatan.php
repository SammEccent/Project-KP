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
    <title>Fasilitas Kesehatan - Kelurahan Lengkong Wetan</title>
    <link rel="stylesheet" href="../css/utama.css">
    <link rel="stylesheet" href="../css/fasilitas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <main class="container">
        <section class="facility-section">
            <h2>Fasilitas Kesehatan</h2>
            <div class="facility-grid">
                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/puskesmas.jpg" alt="Puskesmas">
                    <div class="facility-info">
                        <h3>Puskesmas Lengkong Wetan</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 123</p>
                        <p><i class="fas fa-phone"></i> (021) 543-XXXX</p>
                        <p><i class="fas fa-clock"></i> Senin - Jumat: 08:00 - 16:00</p>
                        <p>Puskesmas ini menyediakan layanan kesehatan dasar seperti pemeriksaan umum, imunisasi, dan konsultasi kesehatan.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/klinik.jpg" alt="Klinik">
                    <div class="facility-info">
                        <h3>Klinik Sehat</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 45</p>
                        <p><i class="fas fa-phone"></i> (021) 543-YYYY</p>
                        <p><i class="fas fa-clock"></i> Setiap Hari: 24 Jam</p>
                        <p>Klinik 24 jam yang menyediakan layanan kesehatan darurat dan pemeriksaan umum.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/apotek.jpg" alt="Apotek">
                    <div class="facility-info">
                        <h3>Apotek Sejahtera</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 67</p>
                        <p><i class="fas fa-phone"></i> (021) 543-ZZZZ</p>
                        <p><i class="fas fa-clock"></i> Setiap Hari: 08:00 - 22:00</p>
                        <p>Apotek yang menyediakan berbagai jenis obat dan alat kesehatan.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once '../footer.php'; ?>
</body>
</html> 