<?php
$page_title = "Sejarah Kelurahan";
include __DIR__ . '/../components/navbar.php';
?>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center mb-5">Sejarah Kelurahan</h1>
            
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title h4 mb-4">Sejarah Berdirinya Kelurahan</h2>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">1980</div>
                            <div class="timeline-content">
                                <h3>Pendirian Awal</h3>
                                <p>Kelurahan ini didirikan pada tahun 1980 sebagai bagian dari upaya pemerintah dalam meningkatkan pelayanan kepada masyarakat.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-date">1990</div>
                            <div class="timeline-content">
                                <h3>Pengembangan Infrastruktur</h3>
                                <p>Pembangunan gedung kantor kelurahan dan fasilitas umum untuk meningkatkan kualitas pelayanan.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-date">2000</div>
                            <div class="timeline-content">
                                <h3>Modernisasi Sistem</h3>
                                <p>Implementasi sistem administrasi modern dan digitalisasi data untuk meningkatkan efisiensi pelayanan.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-date">Sekarang</div>
                            <div class="timeline-content">
                                <h3>Era Digital</h3>
                                <p>Pengembangan sistem informasi kelurahan dan peningkatan kualitas pelayanan berbasis teknologi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.timeline {
    position: relative;
    padding: 20px 0;
}

.timeline-item {
    position: relative;
    padding-left: 50px;
    margin-bottom: 30px;
}

.timeline-item:before {
    content: '';
    position: absolute;
    left: 20px;
    top: 0;
    bottom: -30px;
    width: 2px;
    background: #e0e7ff;
}

.timeline-item:last-child:before {
    display: none;
}

.timeline-date {
    position: absolute;
    left: 0;
    top: 0;
    width: 40px;
    height: 40px;
    background: #6366f1;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
}

.timeline-content {
    background: #f8fafc;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.timeline-content h3 {
    color: #4338ca;
    margin-bottom: 10px;
}
</style>

<?php include __DIR__ . '/../components/footer.php'; ?> 