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
    <title>Fasilitas Pendidikan - Kelurahan Lengkong Wetan</title>
    <link rel="stylesheet" href="../css/utama.css">
    <link rel="stylesheet" href="../css/fasilitas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <main class="container">
        <section class="facility-section">
            <h2>Fasilitas Pendidikan</h2>
            <div class="facility-grid">
                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/sd.jpg" alt="SD">
                    <div class="facility-info">
                        <h3>SDN Lengkong Wetan 01</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 10</p>
                        <p><i class="fas fa-phone"></i> (021) 543-AAAA</p>
                        <p><i class="fas fa-clock"></i> Senin - Jumat: 07:00 - 13:00</p>
                        <p>Sekolah Dasar Negeri yang menyediakan pendidikan dasar berkualitas.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/smp.jpg" alt="SMP">
                    <div class="facility-info">
                        <h3>SMPN 123 Lengkong Wetan</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 20</p>
                        <p><i class="fas fa-phone"></i> (021) 543-BBBB</p>
                        <p><i class="fas fa-clock"></i> Senin - Jumat: 07:00 - 14:00</p>
                        <p>Sekolah Menengah Pertama dengan fasilitas modern dan kurikulum terpadu.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/sma.jpg" alt="SMA">
                    <div class="facility-info">
                        <h3>SMAN 45 Lengkong Wetan</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 30</p>
                        <p><i class="fas fa-phone"></i> (021) 543-CCCC</p>
                        <p><i class="fas fa-clock"></i> Senin - Jumat: 07:00 - 15:00</p>
                        <p>Sekolah Menengah Atas dengan berbagai program unggulan dan prestasi akademik.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo $base_url; ?>assets/images/perpus.jpg" alt="Perpustakaan">
                    <div class="facility-info">
                        <h3>Perpustakaan Umum Lengkong Wetan</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Lengkong Wetan No. 40</p>
                        <p><i class="fas fa-phone"></i> (021) 543-DDDD</p>
                        <p><i class="fas fa-clock"></i> Selasa - Minggu: 09:00 - 17:00</p>
                        <p>Perpustakaan umum dengan koleksi buku lengkap dan ruang baca yang nyaman.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once '../footer.php'; ?>
</body>
</html> 