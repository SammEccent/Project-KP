<?php
require_once '../config/database.php';
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sejarah Kelurahan Lengkong Wetan</title>
    <link rel="stylesheet" href="../utama.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include '../navbar.php'; // Buat file navbar.php dari menu utama ?>
    <main>
        <div class="container">
            <h2>Sejarah Kelurahan Lengkong Wetan</h2>
            <p><!-- Isi sejarah di sini --></p>
        </div>
    </main>
    <?php include '../footer.php'; ?>
</body>
</html>