<section class="hero">
    <h1>Pusat Informasi Kelurahan</h1>
    <p>Temukan beragam informasi dan berita terkini yang relevan untuk masyarakat. Mari bersama-sama terus ikuti perkembangan dan ambil bagian dalam kemajuan kelurahan kita!</p>
</section>

<div class="container">
    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem; margin-bottom: 2rem; width: 100%;">
        <article class="main-news">
            <?php if (!empty($headlineNews)) : ?>
                <img src="<?= BASE_URL . "/" . htmlspecialchars($headlineNews['gambar']) ?>" 
                     alt="<?= htmlspecialchars($headlineNews['judul']) ?>">
                <span class="news-category"><?= htmlspecialchars($headlineNews['kategori_nama']) ?></span>
                <h2><?= htmlspecialchars($headlineNews['judul']) ?></h2>
                <div class="news-meta">
                    <span><i>📅</i> <?= date('d F Y', strtotime($headlineNews['tanggal_publish'])) ?></span>
                    <span><i>👤</i> <?= htmlspecialchars($headlineNews['penulis']) ?></span>
                    <span><i>👁️</i> <?= htmlspecialchars($headlineNews['view_count']) ?> views</span>
                </div>
                <p><?= htmlspecialchars($headlineNews['isi_pendek']) ?></p>
                <a href="<?=BASE_URL."/berita/detail/".htmlspecialchars($headlineNews['slug']) ?>" class="read-more">Baca Selengkapnya</a>
            <?php else : ?>
                <p>Belum ada berita utama.</p>
            <?php endif; ?>
        </article>

        <aside class="sidebar">
            <section class="popular-news">
                <h3 class="section-title">Populer</h3>
                <ul class="popular-list">
                    <?php foreach ($popularNews as $news) : ?>
                        <li>
                            <a href="<?=BASE_URL."/berita/detail/". htmlspecialchars($news['slug']) ?>">
                                <img src="<?= BASE_URL . "/" . htmlspecialchars($news['gambar'] ?? 'default.jpg') ?>" 
                                     alt="<?= htmlspecialchars($news['judul']) ?>">
                                <div>
                                    <h4><?= htmlspecialchars($news['judul']) ?></h4>
                                    <div class="news-meta">
                                        <span><i>📅</i> <?= date('d M Y', strtotime($news['tanggal_publish'])) ?></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section class="categories">
                <h3 class="section-title">Kategori</h3>
                <ul class="category-list">
                    <?php foreach ($categories as $kategori) : ?>
                        <li>
                            <a href="<?=BASE_URL."/berita/kategori/". htmlspecialchars($kategori['slug']) ?>">
                                <?= htmlspecialchars($kategori['nama']) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </aside>
    </div>

    <section class="latest-news" style="width: 100%;">
        <h2 class="section-title">Berita Terkini</h2>
        <div class="news-grid">
            <?php foreach ($latestNews as $news) : ?>
                <article class="news-card">
                    <img src="<?=BASE_URL."/".htmlspecialchars($news['gambar'] ?? 'default.jpg') ?>" 
                         alt="<?= htmlspecialchars($news['judul']) ?>">
                    <div class="news-card-content">
                        <span class="news-category"><?= htmlspecialchars($news['kategori_nama']) ?></span>
                        <h3>
                            <a href="<?= BASE_URL . "/berita/detail/" . htmlspecialchars($news['slug']) ?>">
                                <?= htmlspecialchars($news['judul']) ?>
                            </a>
                        </h3>
                        <p><?= htmlspecialchars($news['isi_pendek']) ?></p>
                        <div class="news-meta">
                            <span><i>📅</i> <?= date('d M Y', strtotime($news['tanggal_publish'])) ?></span>
                            <span><i>👁️</i> <?= number_format($news['view_count']) ?> views</span>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
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
