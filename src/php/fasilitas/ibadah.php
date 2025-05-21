<?php
require_once '../../config/database.php';
$base_url = '../../';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Ibadah - Kelurahan Lengkong Wetan</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/utama.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/fasilitas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .facility-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: #fff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.2);
        }

        .facility-table th,
        .facility-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .facility-table th {
            background-color: #9C27B0;
            color: white;
            font-weight: 600;
        }

        .facility-table tr:hover {
            background-color: #f5f5f5;
        }

        .facility-table td i {
            margin-right: 8px;
            color: #9C27B0;
        }

        @media screen and (max-width: 768px) {
            .facility-table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <?php include '../../components/navbar.php'; ?>

    <main class="main-content">
        <section class="facility-section">
            <div class="container">
                <h2>Fasilitas Ibadah</h2>
                
                <div class="facility-grid">
                    <?php
                    $query = "SELECT * FROM fasilitas_ibadah WHERE status = 'aktif' ORDER BY nama_fasilitas ASC";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="facility-card">
                                <img src="<?php echo $base_url; ?>assets/images/fasilitas/ibadah/<?php echo strtolower(str_replace(' ', '-', $row['nama_fasilitas'])); ?>.jpg" 
                                     alt="<?php echo htmlspecialchars($row['nama_fasilitas']); ?>"
                                     onerror="this.src='<?php echo $base_url; ?>assets/images/placeholder.jpg'">
                                <div class="facility-info">
                                    <h3><?php echo htmlspecialchars($row['nama_fasilitas']); ?></h3>
                                    <p><i class="fas fa-mosque"></i> <?php echo htmlspecialchars($row['jenis_fasilitas']); ?></p>
                                    <p><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($row['alamat']); ?></p>
                                    <p><i class="fas fa-phone"></i> <?php echo htmlspecialchars($row['kontak']); ?></p>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo '<p class="no-data">Belum ada data fasilitas ibadah yang tersedia.</p>';
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>

    <?php include '../components/footer.php'; ?>
</body>
</html> 