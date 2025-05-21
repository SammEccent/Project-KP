<?php
require_once '../../config/database.php';
$base_url = '../../';
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi dan Misi - Kelurahan Lengkong Wetan</title>
    <link rel="stylesheet" href="../../css/utama.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<?php include '../../components/navbar.php'; ?>

    <main>
        <section class="visi-misi-section">
            <div class="container">
                <h2>Visi dan Misi Kelurahan Lengkong Wetan</h2>
                
                <div class="visi-misi-content">
                    <div class="visi">
                        <h3><i class="fas fa-bullseye"></i> Visi</h3>
                        <p>Menjadi Kelurahan yang unggul dalam pelayanan publik, berdaya saing, dan berwawasan lingkungan untuk mewujudkan masyarakat yang sejahtera dan mandiri.</p>
                    </div>

                    <div class="misi">
                        <h3><i class="fas fa-tasks"></i> Misi</h3>
                        <ul>
                            <li>Meningkatkan kualitas pelayanan publik yang cepat, tepat, dan akurat</li>
                            <li>Mengembangkan potensi ekonomi masyarakat melalui pemberdayaan UMKM</li>
                            <li>Mewujudkan lingkungan yang bersih, sehat, dan berkelanjutan</li>
                            <li>Meningkatkan kualitas pendidikan dan kesehatan masyarakat</li>
                            <li>Mengembangkan sistem pemerintahan yang transparan dan akuntabel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../../components/footer.php'; ?>
</body>
</html> 