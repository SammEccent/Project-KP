<section class="hero">
    <h1>Pusat Informasi Kelurahan</h1>
    <p>Temukan beragam informasi dan berita terkini yang relevan untuk masyarakat. Mari bersama-sama terus ikuti perkembangan dan ambil bagian dalam kemajuan kelurahan kita!</p>
</section>

<div class="container">
    <section class="latest-news" style="width: 100%;">
    <h2 class="section-title">Berita Kategori: <?= htmlspecialchars($kategori['nama']) ?></h2>
        <div class="news-grid">
            <?php if (!empty($news)) : ?>
                <?php foreach ($news as $item) : ?>
                    <article class="news-card">
                        <img src="<?= BASE_URL . "/" . htmlspecialchars($item['gambar']) ?>" 
                             alt="<?= htmlspecialchars($item['judul']) ?>">
                        <div class="news-card-content">
                            <span class="news-category"><?= htmlspecialchars($item['kategori_nama']) ?></span>
                            <h3>
                                <a href="<?= BASE_URL . "/berita/detail/" . htmlspecialchars($item['slug']) ?>">
                                    <?= htmlspecialchars($item['judul']) ?>
                                </a>
                            </h3>
                            <p><?= htmlspecialchars($item['isi_pendek']) ?></p>
                            <div class="news-meta">
                                <span><i>📅</i> <?= date('d M Y', strtotime($item['tanggal_publish'])) ?></span>
                                <span><i>👁️</i> <?= number_format($item['view_count']) ?> views</span>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php else : ?>
                <p>Tidak ada berita dalam kategori ini.</p>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <?php if ($pagination['currentPage'] > 1) : ?>
                <a href="?page=<?= $pagination['currentPage'] - 1 ?>" class="prev-link">&laquo; Sebelumnya</a>
            <?php endif; ?>
            
            <?php 
            // Hitung range yang akan ditampilkan (max 5 nomor halaman)
            $startPage = max(1, $pagination['currentPage'] - 2);
            $endPage = min($pagination['totalPages'], $pagination['currentPage'] + 2);
            
            // Tampilkan nomor halaman
            for ($i = $startPage; $i <= $endPage; $i++) : 
            ?>
                <a href="?page=<?= $i ?>" class="<?= ($i == $pagination['currentPage']) ? 'active' : '' ?>">
                    <?= $i ?>
                </a>
            <?php endfor; ?>
            
            <?php if ($pagination['currentPage'] < $pagination['totalPages']) : ?>
                <a href="?page=<?= $pagination['currentPage'] + 1 ?>" class="next-link">Berikutnya &raquo;</a>
            <?php endif; ?>
        </div>
    </section>
</div>
