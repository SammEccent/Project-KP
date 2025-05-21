<?php
require_once '../config/database.php';
$base_url = '../../';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Kesehatan - Kelurahan Lengkong Wetan</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/utama.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/fasilitas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include '../components/navbar.php'; ?>

    <main class="main-content">
        <section class="facility-section">
            <div class="container">
                <h2>Fasilitas Kesehatan</h2>
                
                <div class="facility-grid">
                    <?php
                    $query = "SELECT * FROM fasilitas_kesehatan WHERE status = 'aktif' ORDER BY nama_fasilitas ASC";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="facility-card">
                                <img src="<?php echo $base_url; ?>assets/images/fasilitas/kesehatan/<?php echo strtolower(str_replace(' ', '-', $row['nama_fasilitas'])); ?>.jpg" 
                                     alt="<?php echo htmlspecialchars($row['nama_fasilitas']); ?>"
                                     onerror="this.src='<?php echo $base_url; ?>assets/images/placeholder.jpg'">
                                <div class="facility-info">
                                    <h3><?php echo htmlspecialchars($row['nama_fasilitas']); ?></h3>
                                    <p><i class="fas fa-hospital"></i> <?php echo htmlspecialchars($row['jenis_fasilitas']); ?></p>
                                    <p><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($row['alamat']); ?></p>
                                    <p><i class="fas fa-phone"></i> <?php echo htmlspecialchars($row['kontak']); ?></p>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo '<p class="no-data">Belum ada data fasilitas kesehatan yang tersedia.</p>';
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>

    <?php include '../components/footer.php'; ?>
</body>
</html> 