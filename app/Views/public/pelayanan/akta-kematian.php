<?php require_once __DIR__ . '/../components/navbar.php'; ?>

<div class="pelayanan-hero pelayanan-hero-aktakematian position-relative">
    <button id="toggle-darkmode" class="btn btn-light position-absolute end-0 mt-3 me-3" title="Ganti Mode Gelap/Terang" style="z-index:10;">
        <span class="material-icons">dark_mode</span>
    </button>
    <div class="container text-center">
        <div class="hero-illustration mb-3 mx-auto" style="max-width:160px;">
            <!-- SVG Ilustrasi Akta Kematian -->
            <svg width="100%" height="auto" viewBox="0 0 110 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="max-width:100%;height:auto;">
                <rect x="5" y="10" width="100" height="60" rx="8" fill="#f3e5f5" stroke="#9c27b0" stroke-width="2"/>
                <rect x="15" y="20" width="30" height="40" rx="5" fill="#e1bee7"/>
                <rect x="50" y="25" width="45" height="8" rx="2" fill="#f3e5f5"/>
                <rect x="50" y="38" width="35" height="6" rx="2" fill="#f3e5f5"/>
                <rect x="50" y="50" width="25" height="6" rx="2" fill="#f3e5f5"/>
                <circle cx="30" cy="40" r="8" fill="#fff" stroke="#9c27b0" stroke-width="2"/>
                <circle cx="30" cy="40" r="5" fill="#9c27b0"/>
                <!-- Elemen simbolis -->
                <path d="M65 35 L75 35 M70 30 L70 40" stroke="#9c27b0" stroke-width="2"/>
                <circle cx="70" cy="35" r="8" fill="none" stroke="#9c27b0" stroke-width="1"/>
            </svg>
        </div>
        <h1 class="pelayanan-title mb-2">Pembuatan Akta Kematian
            <span class="bubble-tip" tabindex="0" data-tip="Akta Kematian adalah bukti sah pencatatan kematian seseorang yang diterbitkan oleh Dinas Kependudukan.">
                <span class="material-icons">help_outline</span>
            </span>
        </h1>
        <p class="pelayanan-subtitle">Layanan pembuatan akta kematian sebagai bukti sah pencatatan kematian seseorang.</p>
    </div>
</div>

<div class="container mt-4">
    <div class="row g-4 justify-content-center">
        <!-- Pengertian -->
        <div class="col-12 col-md-10 col-lg-8">
            <div class="pelayanan-card shadow-sm h-100">
                <div class="pelayanan-card-header">
                    <span class="material-icons pelayanan-section-icon bg-primary text-white">info</span>
                    <h2 class="pelayanan-section-title">Pengertian</h2>
                </div>
                <div class="pelayanan-card-body">
                    <p class="text-justify mb-0">
                        Akta Kematian adalah bukti sah pencatatan kematian seseorang yang diterbitkan oleh Dinas Kependudukan dan Pencatatan Sipil. Dokumen ini merupakan bukti resmi yang menyatakan bahwa seseorang telah meninggal dunia dan menjadi dasar untuk pengurusan dokumen kependudukan lainnya.
                    </p>
                </div>
            </div>
        </div>
        <!-- Persyaratan -->
        <div class="col-12 col-md-6 col-lg-5">
            <div class="pelayanan-card shadow-sm h-100">
                <div class="pelayanan-card-header">
                    <span class="material-icons pelayanan-section-icon bg-success text-white">check_circle</span>
                    <h2 class="pelayanan-section-title">Persyaratan
                        <span class="bubble-tip" tabindex="0" data-tip="Persyaratan adalah dokumen yang harus dipenuhi untuk mengurus Akta Kematian.">
                            <span class="material-icons">help</span>
                        </span>
                    </h2>
                </div>
                <div class="pelayanan-card-body">
                    <div class="alert alert-info mb-2">
                        <h3 class="h6 mb-2">Dokumen yang Diperlukan:</h3>
                        <ol class="mb-0 ps-3">
                            <li>Surat Pengantar RT/RW <span class="bubble-tip" tabindex="0" data-tip="Surat dari RT/RW sebagai pengantar administrasi."><span class="material-icons">info</span></span></li>
                            <li>Surat Kematian dari Rumah Sakit/Dokter</li>
                            <li>KTP Orang yang Meninggal</li>
                            <li>Kartu Keluarga (KK)</li>
                            <li>KTP Pelapor (Keluarga Terdekat)</li>
                            <li>Surat Keterangan Pindah (jika diperlukan)</li>
                            <li>Pas Foto 3x4 (2 lembar) - Pelapor</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Download Persyaratan -->
        <div class="col-12 col-md-6 col-lg-5">
            <div class="pelayanan-card shadow-sm h-100">
                <div class="pelayanan-card-header">
                    <span class="material-icons pelayanan-section-icon bg-warning text-white">download</span>
                    <h2 class="pelayanan-section-title">Download Persyaratan</h2>
                </div>
                <div class="pelayanan-card-body">
                    <div class="list-group">
                        <a href="/downloads/akta-kematian/surat-pengantar.docx" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>Format Surat Pengantar RT/RW</span>
                            <span class="badge bg-primary rounded-pill">
                                <i class="material-icons">download</i>
                            </span>
                        </a>
                        <a href="/downloads/akta-kematian/checklist-persyaratan.pdf" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>Checklist Persyaratan</span>
                            <span class="badge bg-primary rounded-pill">
                                <i class="material-icons">download</i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Informasi Tambahan -->
        <div class="col-12 col-md-10 col-lg-8">
            <div class="pelayanan-card shadow-sm h-100">
                <div class="pelayanan-card-header">
                    <span class="material-icons pelayanan-section-icon bg-info text-white">info</span>
                    <h2 class="pelayanan-section-title">Informasi Tambahan</h2>
                </div>
                <div class="pelayanan-card-body">
                    <div class="alert alert-warning mb-0">
                        <h3 class="h6 mb-2">Catatan Penting:</h3>
                        <ul class="mb-0 ps-3">
                            <li>Akta Kematian harus dibuat dalam waktu 30 hari setelah kematian</li>
                            <li>Proses pembuatan Akta Kematian membutuhkan waktu 1-2 hari kerja</li>
                            <li>Biaya pembuatan Akta Kematian gratis</li>
                            <li>Pelapor harus keluarga terdekat atau yang ditunjuk</li>
                            <li>Dokumen ini diperlukan untuk pengurusan warisan dan dokumen lainnya</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Section -->
        <div class="col-12 col-md-10 col-lg-8">
            <div class="pelayanan-card shadow-sm faq-card h-100">
                <div class="pelayanan-card-header">
                    <span class="material-icons pelayanan-section-icon bg-secondary text-white">quiz</span>
                    <h2 class="pelayanan-section-title">FAQ (Tanya Jawab)</h2>
                </div>
                <div class="pelayanan-card-body">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    Kapan Akta Kematian harus dibuat?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Akta Kematian harus dibuat dalam waktu 30 hari setelah kematian. Jika terlambat, akan dikenakan denda administrasi.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Siapa yang bisa melaporkan kematian?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Pelapor harus keluarga terdekat seperti suami/istri, anak, orang tua, atau saudara kandung. Jika tidak ada keluarga terdekat, dapat ditunjuk oleh kepala desa/lurah.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Apakah ada biaya untuk pembuatan Akta Kematian?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Tidak, pembuatan Akta Kematian gratis tanpa dipungut biaya apapun sesuai dengan peraturan pemerintah.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.pelayanan-hero-aktakematian .pelayanan-hero-icon {
    font-size: 4rem;
    margin-bottom: 1rem;
    color: #fff;
    background: linear-gradient(135deg, #9c27b0, #673ab7);
    border-radius: 50%;
    padding: 0.5rem 0.7rem;
    box-shadow: 0 2px 12px rgba(156, 39, 176, 0.15);
}
.hero-illustration svg {
    max-width: 120px;
    height: auto;
    margin-bottom: 0.5rem;
    display: block;
}
.bubble-tip {
    display: inline-block;
    position: relative;
    cursor: pointer;
    color: #9c27b0;
    vertical-align: middle;
}
.bubble-tip .material-icons {
    font-size: 1.1em;
    vertical-align: middle;
}
.bubble-tip:focus::after,
.bubble-tip:hover::after {
    content: attr(data-tip);
    position: absolute;
    left: 50%;
    top: 120%;
    transform: translateX(-50%);
    background: #9c27b0;
    color: #fff;
    padding: 0.5em 1em;
    border-radius: 8px;
    white-space: pre-line;
    font-size: 0.95em;
    z-index: 100;
    min-width: 180px;
    box-shadow: 0 2px 8px rgba(156, 39, 176, 0.15);
    opacity: 1;
    pointer-events: none;
}
.pelayanan-card {
    border-radius: 16px;
    background: #fff;
    border: none;
    transition: box-shadow 0.2s, transform 0.2s;
    margin-bottom: 1.5rem;
    min-height: 100px;
    display: flex;
    flex-direction: column;
    justify-content: stretch;
}
.pelayanan-card:hover {
    box-shadow: 0 8px 32px rgba(156, 39, 176, 0.13);
    transform: translateY(-4px) scale(1.01);
}
.faq-card .accordion-button {
    font-weight: 500;
    color: #9c27b0;
    background: #f3e5f5;
}
.faq-card .accordion-button:not(.collapsed) {
    color: #fff;
    background: #9c27b0;
}
.faq-card .accordion-body {
    background: #f8f9fa;
    color: #333;
}
@media (max-width: 991.98px) {
    .pelayanan-title { font-size: 1.5rem; }
    .pelayanan-section-title { font-size: 1.1rem; }
    .hero-illustration { max-width: 100px; }
}
@media (max-width: 767.98px) {
    .pelayanan-title { font-size: 1.2rem; }
    .pelayanan-section-title { font-size: 1rem; }
    .hero-illustration { max-width: 80px; }
    .pelayanan-card { padding: 1rem; }
    .pelayanan-card-header { flex-direction: column; align-items: flex-start; }
}
@media (max-width: 575.98px) {
    .container { padding-left: 8px; padding-right: 8px; }
    .pelayanan-card { padding: 0.7rem; }
    .faq-card .accordion-button { font-size: 0.95rem; }
}
/* Hindari horizontal scroll */
body, html { overflow-x: hidden; }
.pelayanan-card, .faq-card { word-break: break-word; }
/* Dark mode */
body.dark-mode, .dark-mode .pelayanan-card, .dark-mode .faq-card .accordion-body {
    background: #23272f !important;
    color: #e3e3e3 !important;
}
.dark-mode .pelayanan-card {
    box-shadow: 0 8px 32px rgba(156, 39, 176, 0.10);
}
.dark-mode .pelayanan-section-title, .dark-mode .pelayanan-title, .dark-mode .pelayanan-subtitle {
    color: #e3e3e3 !important;
}
.dark-mode .pelayanan-card-body, .dark-mode .faq-card .accordion-body {
    color: #e3e3e3 !important;
}
.dark-mode .alert-info, .dark-mode .alert-warning {
    background: #2c3140 !important;
    color: #e3e3e3 !important;
    border: none;
}
.dark-mode .accordion-button {
    background: #23272f !important;
    color: #e3e3e3 !important;
}
.dark-mode .accordion-button:not(.collapsed) {
    background: #9c27b0 !important;
    color: #fff !important;
}
.dark-mode .list-group-item {
    background: #23272f !important;
    color: #e3e3e3 !important;
}
</style>
<script>
// Dark mode toggle
const btn = document.getElementById('toggle-darkmode');
btn.addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
    localStorage.setItem('darkmode', document.body.classList.contains('dark-mode'));
});
// Load dark mode if previously set
if(localStorage.getItem('darkmode') === 'true') {
    document.body.classList.add('dark-mode');
}
</script>

<?php require_once __DIR__ . '/../components/footer.php'; ?>
