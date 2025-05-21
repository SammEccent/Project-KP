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
    <title>Fasilitas Tempat Ibadah - Kelurahan Lengkong Wetan</title>
    <link rel="stylesheet" href="../css/utama.css">
    <link rel="stylesheet" href="../css/fasilitas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <main class="container">
        <section class="facility-section">
            <h2>Fasilitas Tempat Ibadah</h2>
            <div class="facility-grid">
                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/masjid.jpg" alt="Masjid">
                    <div class="facility-info">
                        <h3>Masjid Al-Hidayah</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 50</p>
                        <p><i class="fas fa-phone"></i> (021) 543-EEEE</p>
                        <p><i class="fas fa-clock"></i> 24 Jam</p>
                        <p>Masjid utama di Kelurahan Lengkong Wetan dengan kapasitas 500 jamaah.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/gereja.jpg" alt="Gereja">
                    <div class="facility-info">
                        <h3>Gereja Kristen Indonesia</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 60</p>
                        <p><i class="fas fa-phone"></i> (021) 543-FFFF</p>
                        <p><i class="fas fa-clock"></i> Minggu: 08:00 - 12:00</p>
                        <p>Gereja dengan arsitektur modern dan fasilitas lengkap.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/vihara.jpg" alt="Vihara">
                    <div class="facility-info">
                        <h3>Vihara Dharma Bhakti</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 70</p>
                        <p><i class="fas fa-phone"></i> (021) 543-GGGG</p>
                        <p><i class="fas fa-clock"></i> Setiap Hari: 06:00 - 18:00</p>
                        <p>Vihara dengan suasana tenang dan damai untuk meditasi dan ibadah.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/pura.jpg" alt="Pura">
                    <div class="facility-info">
                        <h3>Pura Agung Jagatnatha</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 80</p>
                        <p><i class="fas fa-phone"></i> (021) 543-HHHH</p>
                        <p><i class="fas fa-clock"></i> Setiap Hari: 06:00 - 18:00</p>
                        <p>Pura dengan arsitektur tradisional Bali dan area yang luas.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once '../footer.php'; ?>
</body>
</html> 