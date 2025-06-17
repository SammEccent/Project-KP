<?php
$page_title = "Profil Kelurahan";
include __DIR__ . '/../layouts/header.php';
?>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center mb-5">Profil Kelurahan</h1>
            
            <!-- Visi & Misi -->
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title h4 mb-4">Visi & Misi</h2>
                    <div class="mb-4">
                        <h3 class="h5">Visi</h3>
                        <p>Menjadi kelurahan yang unggul dalam pelayanan publik, pemerintahan yang bersih, dan masyarakat yang sejahtera.</p>
                    </div>
                    <div>
                        <h3 class="h5">Misi</h3>
                        <ul>
                            <li>Meningkatkan kualitas pelayanan publik</li>
                            <li>Mengembangkan pemerintahan yang bersih dan transparan</li>
                            <li>Mendorong partisipasi masyarakat dalam pembangunan</li>
                            <li>Meningkatkan kesejahteraan masyarakat</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sejarah -->
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title h4 mb-4">Sejarah</h2>
                    <p>Kelurahan ini didirikan pada tahun [Tahun Pendirian] dan telah mengalami berbagai perkembangan signifikan dalam melayani masyarakat. Sejak awal berdirinya, kelurahan ini telah berkomitmen untuk memberikan pelayanan terbaik kepada masyarakat.</p>
                </div>
            </div>

            <!-- Struktur Organisasi -->
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title h4 mb-4">Struktur Organisasi</h2>
                    <?php if (!empty($data['struktur_organisasi'])): ?>
                    <div class="mermaid">
                        <?php echo $data['mermaid_graph']; ?>
                    </div>
                    <?php else: ?>
                    <div class="alert alert-info">
                        Data struktur organisasi belum tersedia.
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Wilayah -->
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title h4 mb-4">Wilayah</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="h5">Batas Wilayah</h3>
                            <ul>
                                <li>Utara: [Batas Utara]</li>
                                <li>Selatan: [Batas Selatan]</li>
                                <li>Timur: [Batas Timur]</li>
                                <li>Barat: [Batas Barat]</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h5">Luas Wilayah</h3>
                            <p>Total luas wilayah: [Luas Wilayah] km²</p>
                            <h3 class="h5">Jumlah Penduduk</h3>
                            <p>Total penduduk: [Jumlah Penduduk] jiwa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../layouts/footer.php'; ?> 