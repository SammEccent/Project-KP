<?php require_once __DIR__ . '/../components/navbar.php'; ?>

<div class="pelayanan-hero pelayanan-hero-ktp position-relative">
    <button id="toggle-darkmode" class="btn btn-light position-absolute end-0 mt-3 me-3" title="Ganti Mode Gelap/Terang" style="z-index:10;">
        <span class="material-icons">dark_mode</span>
    </button>
    <div class="container text-center">
        <div class="hero-illustration mb-3 mx-auto" style="max-width:160px;">
            <!-- SVG Ilustrasi KTP -->
            <svg width="100%" height="auto" viewBox="0 0 110 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="max-width:100%;height:auto;">
                <rect x="5" y="10" width="100" height="60" rx="8" fill="#e3f2fd" stroke="#1976d2" stroke-width="2"/>
                <rect x="15" y="20" width="30" height="40" rx="5" fill="#90caf9"/>
                <rect x="50" y="25" width="45" height="8" rx="2" fill="#bbdefb"/>
                <rect x="50" y="38" width="35" height="6" rx="2" fill="#bbdefb"/>
                <rect x="50" y="50" width="25" height="6" rx="2" fill="#bbdefb"/>
                <circle cx="30" cy="40" r="8" fill="#fff" stroke="#1976d2" stroke-width="2"/>
                <circle cx="30" cy="40" r="5" fill="#1976d2"/>
            </svg>
        </div>
        <h1 class="pelayanan-title mb-2">Pembuatan KTP
            <span class="bubble-tip" tabindex="0" data-tip="KTP adalah identitas resmi yang wajib dimiliki warga Indonesia.">
                <span class="material-icons">help_outline</span>
            </span>
        </h1>
        <p class="pelayanan-subtitle">Layanan pembuatan dan pengurusan Kartu Tanda Penduduk (KTP) untuk warga yang telah berusia 17 tahun atau sudah menikah.</p>
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
                        Kartu Tanda Penduduk (KTP) adalah identitas resmi penduduk sebagai bukti diri yang diterbitkan oleh Instansi Pelaksana yang berlaku di seluruh wilayah Negara Kesatuan Republik Indonesia. KTP wajib dimiliki oleh setiap penduduk yang telah berusia 17 tahun atau telah menikah.
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
                        <span class="bubble-tip" tabindex="0" data-tip="Persyaratan adalah dokumen yang harus dipenuhi untuk mengurus KTP.">
                            <span class="material-icons">help</span>
                        </span>
                    </h2>
                </div>
                <div class="pelayanan-card-body">
                    <div class="alert alert-info mb-2">
                        <h3 class="h6 mb-2">Dokumen yang Diperlukan:</h3>
                        <ol class="mb-0 ps-3">
                            <li>Surat Pengantar RT/RW <span class="bubble-tip" tabindex="0" data-tip="Surat dari RT/RW sebagai pengantar administrasi."><span class="material-icons">info</span></span></li>
                            <li>Kartu Keluarga (KK)</li>
                            <li>Surat Nikah (bagi yang sudah menikah)</li>
                            <li>Surat Pindah (bagi pendatang)</li>
                            <li>Pas Foto 3x4 (2 lembar)</li>
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
                        <a href="/downloads/ktp/surat-pengantar.docx" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>Format Surat Pengantar RT/RW</span>
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
                            <li>Proses pembuatan KTP membutuhkan waktu 1-2 hari kerja</li>
                            <li>KTP akan berlaku seumur hidup kecuali ada perubahan data</li>
                            <li>Biaya pembuatan KTP gratis</li>
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
                                    Apakah KTP bisa diurus secara online?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Untuk saat ini, pengajuan KTP harus dilakukan secara langsung di kantor kelurahan. Namun, informasi dan persyaratan dapat diakses online.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Berapa lama proses pembuatan KTP?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Proses pembuatan KTP biasanya memakan waktu 1-2 hari kerja jika semua dokumen lengkap.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Apakah ada biaya untuk pembuatan KTP?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Tidak, pembuatan KTP gratis tanpa dipungut biaya apapun.
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
.pelayanan-hero-ktp .pelayanan-hero-icon {
    font-size: 4rem;
    margin-bottom: 1rem;
    color: #fff;
    background: linear-gradient(135deg, #1976d2, #764ba2);
    border-radius: 50%;
    padding: 0.5rem 0.7rem;
    box-shadow: 0 2px 12px rgba(25, 118, 210, 0.15);
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
    color: #1976d2;
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
    background: #1976d2;
    color: #fff;
    padding: 0.5em 1em;
    border-radius: 8px;
    white-space: pre-line;
    font-size: 0.95em;
    z-index: 100;
    min-width: 180px;
    box-shadow: 0 2px 8px rgba(25, 118, 210, 0.15);
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
    box-shadow: 0 8px 32px rgba(102,126,234,0.13);
    transform: translateY(-4px) scale(1.01);
}
.faq-card .accordion-button {
    font-weight: 500;
    color: #1976d2;
    background: #e3f2fd;
}
.faq-card .accordion-button:not(.collapsed) {
    color: #fff;
    background: #1976d2;
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
    box-shadow: 0 8px 32px rgba(25, 118, 210, 0.10);
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
    background: #1976d2 !important;
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
