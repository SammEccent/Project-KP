<?php
$page_title = "Visi & Misi Kelurahan";
include __DIR__ . '/../layouts/header.php';
?>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center mb-5">Visi & Misi Kelurahan</h1>
            
            <!-- Visi -->
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title h4 mb-4">Visi</h2>
                    <div class="vision-content">
                        <div class="vision-icon">
                            <span class="material-icons">visibility</span>
                        </div>
                        <div class="vision-text">
                            <p class="lead">"Menjadi kelurahan yang unggul dalam pelayanan publik, pemerintahan yang bersih, dan masyarakat yang sejahtera."</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Misi -->
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title h4 mb-4">Misi</h2>
                    <div class="mission-list">
                        <div class="mission-item">
                            <div class="mission-icon">
                                <span class="material-icons">public</span>
                            </div>
                            <div class="mission-text">
                                <h3>Pelayanan Publik</h3>
                                <p>Meningkatkan kualitas pelayanan publik yang cepat, tepat, dan transparan</p>
                            </div>
                        </div>

                        <div class="mission-item">
                            <div class="mission-icon">
                                <span class="material-icons">gavel</span>
                            </div>
                            <div class="mission-text">
                                <h3>Pemerintahan Bersih</h3>
                                <p>Mengembangkan pemerintahan yang bersih, transparan, dan akuntabel</p>
                            </div>
                        </div>

                        <div class="mission-item">
                            <div class="mission-icon">
                                <span class="material-icons">groups</span>
                            </div>
                            <div class="mission-text">
                                <h3>Partisipasi Masyarakat</h3>
                                <p>Mendorong partisipasi aktif masyarakat dalam pembangunan</p>
                            </div>
                        </div>

                        <div class="mission-item">
                            <div class="mission-icon">
                                <span class="material-icons">trending_up</span>
                            </div>
                            <div class="mission-text">
                                <h3>Kesejahteraan</h3>
                                <p>Meningkatkan kesejahteraan masyarakat melalui program pembangunan berkelanjutan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.vision-content {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 20px;
    background: #f8fafc;
    border-radius: 8px;
}

.vision-icon {
    background: #6366f1;
    color: white;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.vision-icon .material-icons {
    font-size: 32px;
}

.vision-text {
    flex: 1;
}

.vision-text .lead {
    color: #4338ca;
    font-size: 1.25rem;
    margin: 0;
}

.mission-list {
    display: grid;
    gap: 20px;
}

.mission-item {
    display: flex;
    gap: 20px;
    padding: 20px;
    background: #f8fafc;
    border-radius: 8px;
    transition: transform 0.3s ease;
}

.mission-item:hover {
    transform: translateY(-2px);
}

.mission-icon {
    background: #6366f1;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.mission-icon .material-icons {
    font-size: 24px;
}

.mission-text h3 {
    color: #4338ca;
    font-size: 1.1rem;
    margin-bottom: 8px;
}

.mission-text p {
    margin: 0;
    color: #4b5563;
}
</style>

<?php include __DIR__ . '/../layouts/footer.php'; ?> 