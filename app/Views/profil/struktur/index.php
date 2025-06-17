<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h1 class="text-center mb-5">Struktur Organisasi Kelurahan</h1>
            
            <div class="card mb-4">
                <div class="card-body">
                    <div class="org-chart">
                        <!-- Lurah -->
                        <div class="org-level">
                            <div class="org-item lurah">
                                <div class="org-avatar">
                                    <img src="/images/avatar-placeholder.png" alt="Lurah">
                                </div>
                                <div class="org-info">
                                    <h3>Lurah</h3>
                                    <p>Nama Lurah</p>
                                </div>
                            </div>
                        </div>

                        <!-- Sekretaris dan Kasi -->
                        <div class="org-level">
                            <div class="org-item">
                                <div class="org-avatar">
                                    <img src="/images/avatar-placeholder.png" alt="Sekretaris">
                                </div>
                                <div class="org-info">
                                    <h3>Sekretaris</h3>
                                    <p>Nama Sekretaris</p>
                                </div>
                            </div>
                            <div class="org-item">
                                <div class="org-avatar">
                                    <img src="/images/avatar-placeholder.png" alt="Kasi Pemerintahan">
                                </div>
                                <div class="org-info">
                                    <h3>Kasi Pemerintahan</h3>
                                    <p>Nama Kasi</p>
                                </div>
                            </div>
                            <div class="org-item">
                                <div class="org-avatar">
                                    <img src="/images/avatar-placeholder.png" alt="Kasi Kesejahteraan">
                                </div>
                                <div class="org-info">
                                    <h3>Kasi Kesejahteraan</h3>
                                    <p>Nama Kasi</p>
                                </div>
                            </div>
                        </div>

                        <!-- Staff -->
                        <div class="org-level">
                            <div class="org-item staff">
                                <div class="org-avatar">
                                    <img src="/images/avatar-placeholder.png" alt="Staff">
                                </div>
                                <div class="org-info">
                                    <h3>Staff</h3>
                                    <p>Nama Staff</p>
                                </div>
                            </div>
                            <div class="org-item staff">
                                <div class="org-avatar">
                                    <img src="/images/avatar-placeholder.png" alt="Staff">
                                </div>
                                <div class="org-info">
                                    <h3>Staff</h3>
                                    <p>Nama Staff</p>
                                </div>
                            </div>
                            <div class="org-item staff">
                                <div class="org-avatar">
                                    <img src="/images/avatar-placeholder.png" alt="Staff">
                                </div>
                                <div class="org-info">
                                    <h3>Staff</h3>
                                    <p>Nama Staff</p>
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
.org-chart {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
    padding: 20px;
}

.org-level {
    display: flex;
    gap: 30px;
    justify-content: center;
    position: relative;
}

.org-level:not(:last-child):after {
    content: '';
    position: absolute;
    bottom: -40px;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 40px;
    background: #e0e7ff;
}

.org-item {
    background: #f8fafc;
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    min-width: 200px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    transition: transform 0.3s ease;
}

.org-item:hover {
    transform: translateY(-5px);
}

.org-item.lurah {
    background: #6366f1;
    color: white;
}

.org-item.lurah .org-info h3,
.org-item.lurah .org-info p {
    color: white;
}

.org-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto 15px;
    border: 3px solid #e0e7ff;
}

.org-item.lurah .org-avatar {
    border-color: white;
}

.org-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.org-info h3 {
    color: #4338ca;
    font-size: 1.1rem;
    margin-bottom: 5px;
}

.org-info p {
    color: #4b5563;
    margin: 0;
    font-size: 0.9rem;
}

.org-item.staff {
    background: #f1f5f9;
}

.org-item.staff .org-info h3 {
    color: #64748b;
}

.org-item.staff .org-info p {
    color: #94a3b8;
}
</style> 