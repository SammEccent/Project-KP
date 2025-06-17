<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3">Sejarah Kelurahan</h1>
                <a href="/profil/sejarah/create" class="btn btn-primary">
                    <span class="material-icons">add</span> Tambah Sejarah
                </a>
            </div>

            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['success'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $_SESSION['error'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>

            <div class="card">
                <div class="card-body">
                    <div class="timeline">
                        <?php if (!empty($data['sejarah'])): ?>
                            <?php foreach ($data['sejarah'] as $sejarah): ?>
                                <div class="timeline-item">
                                    <div class="timeline-date"><?= htmlspecialchars($sejarah['tahun']) ?></div>
                                    <div class="timeline-content">
                                        <h3><?= htmlspecialchars($sejarah['judul']) ?></h3>
                                        <p><?= htmlspecialchars($sejarah['deskripsi']) ?></p>
                                        <div class="timeline-actions">
                                            <a href="/profil/sejarah/edit/<?= $sejarah['id'] ?>" class="btn btn-sm btn-outline-primary">
                                                <span class="material-icons">edit</span> Edit
                                            </a>
                                            <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete(<?= $sejarah['id'] ?>)">
                                                <span class="material-icons">delete</span> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="text-center py-4">
                                <span class="material-icons text-muted" style="font-size: 48px;">history</span>
                                <p class="mt-2 text-muted">Belum ada data sejarah yang ditambahkan</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data sejarah ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="deleteForm" method="POST" style="display: inline;">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
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
    transition: transform 0.3s ease;
}

.timeline-content:hover {
    transform: translateY(-2px);
}

.timeline-content h3 {
    color: #4338ca;
    margin-bottom: 10px;
    font-size: 1.2rem;
}

.timeline-content p {
    color: #4b5563;
    margin-bottom: 15px;
}

.timeline-actions {
    display: flex;
    gap: 10px;
}

.timeline-actions .btn {
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.timeline-actions .material-icons {
    font-size: 18px;
}
</style>

<script>
function confirmDelete(id) {
    const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
    document.getElementById('deleteForm').action = `/profil/sejarah/delete/${id}`;
    modal.show();
}
</script> 