<div class="container mt-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h1 class="card-title">Tracking Status Pengajuan</h1>
                        <p class="text-muted">Lacak status pengajuan dokumen kependudukan Anda</p>
                    </div>

                    <!-- Search Form -->
                    <div class="row mb-4">
                        <div class="col-lg-8 mx-auto">
                            <form action="<?=BASE_URL?>/pelayanan/tracking" method="GET" class="search-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Masukkan NIK atau nama pemohon..." value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
                                    <button class="btn btn-primary" type="submit">
                                        <span class="material-icons">search</span>
                                        Cari
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Flash Messages -->
                    <?php if (isset($_SESSION['flash_messages'])): ?>
                        <?php foreach ($_SESSION['flash_messages'] as $type => $message): ?>
                            <div class="alert alert-<?= $type === 'error' ? 'danger' : $type ?> alert-dismissible fade show" role="alert">
                                <?= htmlspecialchars($message) ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endforeach; ?>
                        <?php unset($_SESSION['flash_messages']); ?>
                    <?php endif; ?>

                    <!-- Results -->
                    <?php if (!empty($pengajuan)): ?>
                        <div class="tracking-results">
                            <h3 class="mb-3">Hasil Pencarian</h3>
                            
                            <?php foreach ($pengajuan as $index => $item): ?>
                                <div class="tracking-item">
                                    <div class="tracking-header">
                                        <div class="tracking-info">
                                            <h4 class="tracking-title"><?= htmlspecialchars($item['jenis_layanan']) ?></h4>
                                            <p class="tracking-subtitle">
                                                <strong>Pemohon:</strong> <?= htmlspecialchars($item['nama']) ?> | 
                                                <strong>NIK:</strong> <?= htmlspecialchars($item['nik']) ?>
                                            </p>
                                            <p class="tracking-date">
                                                <span class="material-icons">schedule</span>
                                                Diajukan pada: <?= date('d F Y H:i', strtotime($item['tanggal_pengajuan'])) ?>
                                            </p>
                                        </div>
                                        <div class="tracking-status">
                                            <?php
                                            $statusClass = '';
                                            $statusText = '';
                                            switch($item['status']) {
                                                case 'pending':
                                                    $statusClass = 'warning';
                                                    $statusText = 'Menunggu Verifikasi';
                                                    break;
                                                case 'processing':
                                                    $statusClass = 'info';
                                                    $statusText = 'Sedang Diproses';
                                                    break;
                                                case 'completed':
                                                    $statusClass = 'success';
                                                    $statusText = 'Selesai';
                                                    break;
                                                case 'rejected':
                                                    $statusClass = 'danger';
                                                    $statusText = 'Ditolak';
                                                    break;
                                                default:
                                                    $statusClass = 'secondary';
                                                    $statusText = 'Tidak Diketahui';
                                            }
                                            ?>
                                            <span class="badge bg-<?= $statusClass ?> fs-6"><?= $statusText ?></span>
                                        </div>
                                    </div>
                                    
                                    <div class="tracking-details">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><strong>Alamat:</strong> <?= htmlspecialchars($item['alamat']) ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><strong>Status:</strong> <?= $statusText ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Progress Timeline -->
                                    <div class="tracking-timeline">
                                        <div class="timeline-item <?= in_array($item['status'], ['pending', 'processing', 'completed']) ? 'active' : '' ?>">
                                            <div class="timeline-marker"></div>
                                            <div class="timeline-content">
                                                <h5>Pengajuan Diterima</h5>
                                                <p>Dokumen pengajuan telah diterima dan sedang diverifikasi</p>
                                                <small><?= date('d/m/Y H:i', strtotime($item['tanggal_pengajuan'])) ?></small>
                                            </div>
                                        </div>
                                        
                                        <div class="timeline-item <?= in_array($item['status'], ['processing', 'completed']) ? 'active' : '' ?>">
                                            <div class="timeline-marker"></div>
                                            <div class="timeline-content">
                                                <h5>Sedang Diproses</h5>
                                                <p>Dokumen sedang diproses oleh petugas</p>
                                                <small><?= $item['status'] === 'pending' ? 'Menunggu' : date('d/m/Y H:i', strtotime($item['tanggal_pengajuan'] . ' +1 day')) ?></small>
                                            </div>
                                        </div>
                                        
                                        <div class="timeline-item <?= $item['status'] === 'completed' ? 'active' : '' ?>">
                                            <div class="timeline-marker"></div>
                                            <div class="timeline-content">
                                                <h5>Selesai</h5>
                                                <p>Dokumen telah selesai diproses dan siap diambil</p>
                                                <small><?= $item['status'] === 'completed' ? date('d/m/Y H:i', strtotime($item['tanggal_pengajuan'] . ' +2 days')) : 'Menunggu' ?></small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="tracking-actions">
                                        <button class="btn btn-outline-primary btn-sm" onclick="printTracking(<?= $index ?>)">
                                            <span class="material-icons">print</span>
                                            Cetak
                                        </button>
                                        <button class="btn btn-outline-info btn-sm" onclick="shareTracking(<?= $index ?>)">
                                            <span class="material-icons">share</span>
                                            Bagikan
                                        </button>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-5">
                            <div class="empty-state">
                                <span class="material-icons empty-icon">search_off</span>
                                <h3>Tidak ada data pengajuan</h3>
                                <p class="text-muted">
                                    <?php if (isset($_GET['search']) && !empty($_GET['search'])): ?>
                                        Tidak ditemukan pengajuan dengan kata kunci "<?= htmlspecialchars($_GET['search']) ?>"
                                    <?php else: ?>
                                        Belum ada pengajuan yang tersimpan. Silakan ajukan dokumen terlebih dahulu.
                                    <?php endif; ?>
                                </p>
                                <a href="<?=BASE_URL?>/pelayanan" class="btn btn-primary">
                                    <span class="material-icons">add</span>
                                    Ajukan Dokumen
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function printTracking(index) {
    // Implementasi cetak tracking
    window.print();
}

function shareTracking(index) {
    // Implementasi share tracking
    if (navigator.share) {
        navigator.share({
            title: 'Status Pengajuan Dokumen',
            text: 'Lacak status pengajuan dokumen Anda',
            url: window.location.href
        });
    } else {
        // Fallback untuk browser yang tidak mendukung Web Share API
        navigator.clipboard.writeText(window.location.href).then(function() {
            alert('Link telah disalin ke clipboard!');
        });
    }
}
</script> 