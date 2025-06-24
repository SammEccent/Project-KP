<section class="hero">
    <h1>Pusat Informasi Kelurahan</h1>
    <p>Temukan beragam informasi dan berita terkini yang relevan untuk masyarakat. Mari bersama-sama terus ikuti perkembangan dan ambil bagian dalam kemajuan kelurahan kita!</p>
</section>

<div class="container">
    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem; margin-bottom: 2rem; width: 100%;">
        <article class="main-news">
            <?php if (!empty($berita)) : ?>
                <img src="<?= BASE_URL . "/" . htmlspecialchars($berita['gambar']) ?>" 
                     alt="<?= htmlspecialchars($berita['judul']) ?>">
                <span class="news-category"><?= htmlspecialchars($berita['kategori_nama']) ?></span>
                <h2><?= htmlspecialchars($berita['judul']) ?></h2>
                <div class="news-meta">
                    <span><i>📅</i> <?= date('d F Y', strtotime($berita['tanggal_publish'])) ?></span>
                    <span><i>👤</i> <?= htmlspecialchars($berita['penulis']) ?></span>
                    <span><i>👁️</i> <?= number_format($berita['view_count']) ?> views</span>
                </div>
                
                <div class="news-content">
                    <?php foreach ($berita['contents'] as $content): ?>
                        <?php if ($content['content_type'] === 'text'): ?>
                            <p><?= nl2br(htmlspecialchars($content['content'])) ?></p>
                        <?php elseif ($content['content_type'] === 'image'): ?>
                            <img src="<?= BASE_URL . '/' . htmlspecialchars($content['content']) ?>" 
                                 alt="Gambar berita" class="content-image">
                        <?php elseif ($content['content_type'] === 'video_embed'): ?>
                            <div class="video-embed">
                                <?= $content['content'] ?> <!-- Embed code dari YouTube/dll -->
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <p>Berita tidak ditemukan.</p>
            <?php endif; ?>
        </article>

        <aside class="sidebar">
            <section class="popular-news">
                <h3 class="section-title">Terkait</h3>
                <ul class="popular-list">
                    <?php foreach ($relatedNews as $news) : ?>
                        <li>
                            <a href="/berita/<?= htmlspecialchars($news['slug']) ?>">
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
</div>
