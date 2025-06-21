<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Pendidikan</title>
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
            max-width: 800px;
            margin: 40px auto 60px auto;
            padding: 0 16px;
        }
        .fasilitas-title {
            text-align: center;
            font-size: 2em;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 36px;
            letter-spacing: 1px;
        }
        .fasilitas-list {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }
        .fasilitas-card {
            display: flex;
            align-items: flex-start;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 4px 16px 0 rgba(30,41,59,0.07);
            padding: 20px 24px;
            gap: 22px;
            transition: box-shadow 0.2s, transform 0.2s;
            border-left: 6px solid #4F46E5;
        }
        .fasilitas-card:hover {
            box-shadow: 0 8px 24px 0 rgba(30,41,59,0.13);
            transform: translateY(-2px) scale(1.01);
        }
        .fasilitas-icon {
            min-width: 56px;
            min-height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #EEF2FF;
            border-radius: 12px;
            font-size: 2.2em;
            color: #4F46E5;
            box-shadow: 0 2px 8px rgba(79,70,229,0.07);
        }
        .fasilitas-info {
            flex: 1;
        }
        .fasilitas-info h3 {
            margin: 0 0 8px 0;
            font-size: 1.15em;
            font-weight: 600;
            color: #1e293b;
        }
        .fasilitas-info p {
            margin: 0 0 6px 0;
            color: #475569;
            font-size: 1em;
            line-height: 1.5;
        }
        .fasilitas-action {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 8px;
        }
        .btn-maps {
            background: #4F46E5;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 8px 18px;
            font-size: 0.98em;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            transition: background 0.2s, transform 0.2s;
            box-shadow: 0 2px 8px rgba(79,70,229,0.07);
        }
        .btn-maps:hover {
            background: #4338CA;
            transform: translateY(-2px) scale(1.03);
        }
        @media (max-width: 600px) {
            .fasilitas-card {
                flex-direction: column;
                align-items: stretch;
                padding: 14px 8px;
                gap: 12px;
            }
            .fasilitas-icon {
                min-width: 40px;
                min-height: 40px;
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <div class="fasilitas-section">
        <div class="fasilitas-title">Fasilitas Pendidikan</div>
        <div class="fasilitas-list">
            <!-- Card 1 -->
            <div class="fasilitas-card">
                <div class="fasilitas-icon"><span class="material-icons-outlined">school</span></div>
                <div class="fasilitas-info">
                    <h3>SDN Lengkong Wetan</h3>
                    <p>Jl. Lengkong Wetan, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310</p>
                    <div class="fasilitas-action">
                        <a href="https://goo.gl/maps/4Z1b7d8f5kz" target="_blank" class="btn-maps">
                            <span class="material-icons-outlined" style="font-size:1.1em;">location_on</span> Lihat di Maps
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="fasilitas-card">
                <div class="fasilitas-icon"><span class="material-icons-outlined">school</span></div>
                <div class="fasilitas-info">
                    <h3>SDN Lengkong Wetan 02</h3>
                    <p>Jl. Lengkong Wetan No.2, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310</p>
                    <div class="fasilitas-action">
                        <a href="https://goo.gl/maps/4Z1b7d8f5kz" target="_blank" class="btn-maps">
                            <span class="material-icons-outlined" style="font-size:1.1em;">location_on</span> Lihat di Maps
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="fasilitas-card">
                <div class="fasilitas-icon"><span class="material-icons-outlined">school</span></div>
                <div class="fasilitas-info">
                    <h3>SDN Lengkong Wetan 03</h3>
                    <p>Jl. Lengkong Wetan No.3, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310</p>
                    <div class="fasilitas-action">
                        <a href="https://goo.gl/maps/4Z1b7d8f5kz" target="_blank" class="btn-maps">
                            <span class="material-icons-outlined" style="font-size:1.1em;">location_on</span> Lihat di Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>