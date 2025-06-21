<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Kelurahan Lengkong Wetan</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <style>
        body {
            background: #f3f4f6;
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
        }
        .fasilitas-section {
            max-width: 900px;
            margin: 40px auto 60px auto;
            padding: 0 16px;
        }
        .fasilitas-title {
            text-align: center;
            font-size: 2.2em;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 36px;
            letter-spacing: 1px;
        }
        .fasilitas-list {
            display: flex;
            flex-direction: column;
            gap: 28px;
        }
        .fasilitas-card {
            display: flex;
            align-items: flex-start;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 16px 0 rgba(30,41,59,0.07);
            padding: 24px 28px;
            gap: 28px;
            transition: box-shadow 0.2s, transform 0.2s;
            border-left: 6px solid #4F46E5;
        }
        .fasilitas-card:hover {
            box-shadow: 0 8px 24px 0 rgba(30,41,59,0.13);
            transform: translateY(-2px) scale(1.01);
        }
        .fasilitas-icon {
            min-width: 64px;
            min-height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #EEF2FF;
            border-radius: 12px;
            font-size: 2.5em;
            color: #4F46E5;
            box-shadow: 0 2px 8px rgba(79,70,229,0.07);
        }
        .fasilitas-info {
            flex: 1;
        }
        .fasilitas-info h3 {
            margin: 0 0 8px 0;
            font-size: 1.3em;
            font-weight: 600;
            color: #1e293b;
        }
        .fasilitas-info p {
            margin: 0;
            color: #475569;
            font-size: 1.05em;
            line-height: 1.6;
        }
        @media (max-width: 600px) {
            .fasilitas-card {
                flex-direction: column;
                align-items: stretch;
                padding: 18px 12px;
                gap: 16px;
            }
            .fasilitas-icon {
                min-width: 48px;
                min-height: 48px;
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <div class="fasilitas-section">
        <div class="fasilitas-title">Fasilitas Kelurahan Lengkong Wetan</div>
        <div class="fasilitas-list">
            <!-- Card Fasilitas Pendidikan -->
            <div class="fasilitas-card">
                <div class="fasilitas-icon"><span class="material-icons-outlined">school</span></div>
                <div class="fasilitas-info">
                    <h3>Pendidikan</h3>
                    <p>Sarana pendidikan seperti sekolah dasar, PAUD, dan taman baca yang menunjang kebutuhan belajar masyarakat di Kelurahan Lengkong Wetan.</p>
                </div>
            </div>
            <!-- Card Fasilitas Kesehatan -->
            <div class="fasilitas-card">
                <div class="fasilitas-icon"><span class="material-icons-outlined">local_hospital</span></div>
                <div class="fasilitas-info">
                    <h3>Kesehatan</h3>
                    <p>Puskesmas, posyandu, dan fasilitas kesehatan lainnya yang siap melayani kebutuhan kesehatan warga secara prima dan ramah.</p>
                </div>
            </div>
            <!-- Card Fasilitas Ibadah -->
            <div class="fasilitas-card">
                <div class="fasilitas-icon"><span class="material-icons-outlined">mosque</span></div>
                <div class="fasilitas-info">
                    <h3>Ibadah</h3>
                    <p>Masjid, mushola, dan tempat ibadah lain yang nyaman dan bersih untuk mendukung kegiatan keagamaan masyarakat.</p>
                </div>
            </div>
            <!-- Card Fasilitas Balai Warga -->
            <div class="fasilitas-card">
                <div class="fasilitas-icon"><span class="material-icons-outlined">groups</span></div>
                <div class="fasilitas-info">
                    <h3>Balai Warga</h3>
                    <p>Balai warga sebagai pusat kegiatan masyarakat, rapat, pelatihan, dan berbagai acara sosial di lingkungan Kelurahan Lengkong Wetan.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 