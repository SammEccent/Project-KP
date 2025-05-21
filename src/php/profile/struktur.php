<?php
require_once '../../config/database.php';
$base_url = '../../';
session_start();

// Cek koneksi database
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi - Kelurahan Lengkong Wetan</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/utama.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .struktur-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
        }

        .struktur-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 250px; /* Sesuaikan lebar card */
            text-align: center;
        }

        .struktur-image img {
            width: 100%;
            height: 200px; /* Sesuaikan tinggi gambar */
            object-fit: cover;
        }

        .struktur-info {
            padding: 15px;
        }

        .struktur-info h3 {
            color: #2c3e50;
            margin-bottom: 5px;
            font-size: 18px;
        }

        .struktur-info .jabatan {
            color: #666;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .struktur-card {
                width: 180px; /* Sesuaikan lebar card untuk mobile */
            }
            .struktur-image img {
                height: 150px; /* Sesuaikan tinggi gambar untuk mobile */
            }
        }
    </style>
</head>
<body>
    <main class="main-content">
        <section class="page-header">
            <div class="container">
                <h2>Struktur Organisasi</h2>
            </div>
        </section>

        <section class="content">
            <div class="container">
                <div class="struktur-wrapper">
                    <?php
                    $query = "SELECT * FROM struktur_organisasi ORDER BY urutan ASC";
                    $result = mysqli_query($conn, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="struktur-card">';
                            if(!empty($row['foto'])) {
                                echo '<div class="struktur-image">';
                                echo '<img src="' . $base_url . 'assets/images/struktur/' . htmlspecialchars($row['foto']) . '" alt="' . htmlspecialchars($row['nama']) . '">';
                                echo '</div>';
                            }
                            echo '<div class="struktur-info">';
                            echo '<h3>' . htmlspecialchars($row['nama']) . '</h3>';
                            echo '<p class="jabatan">' . htmlspecialchars($row['jabatan']) . '</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>Data struktur organisasi belum tersedia.</p>';
                    }

                    // Tutup koneksi database
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>