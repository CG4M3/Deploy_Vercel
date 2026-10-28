<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Sekolah Standar</title>
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body { background-color: #f8f9fa; }
        .nav-link-active { color: #0d6efd !important; font-weight: bold; border-bottom: 2px solid #0d6efd; }
    </style>
</head>
<body>

    <!-- NAVBAR UTAMA -->
    <!-- NAVBAR UTAMA (Menggunakan Flexbox Bawaan, Bebas Row/Col yang Merusak Layar) -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm border-bottom py-3 mb-4">
    <!-- Menggunakan container-fluid agar melebar tapi tetap punya bantalan jarak aman di pinggir -->
    <div class="container-fluid px-md-4">
        
        <!-- BAGIAN KIRI: BRANDING (Logo + Tulisan Sekolah Numpuk Rapi) -->
        <a class="navbar-brand d-flex align-items-center" href="#" style="max-width: 250px;">
            <!-- Mengunci ukuran kotak logo agar TETAP KONSISTEN di layar HP maupun Laptop -->
            <div class="bg-secondary-subtle rounded d-flex align-items-center justify-content-center me-2 flex-shrink-0" style="width: 45px; height: 45px;">
                <img src="logo-sekolah.png" class="object-fit-fill w-100 h-100" alt="">
                <!-- Nanti tinggal ganti tag span diatas dengan: <img src="logo.png" class="w-100 h-100 object-fit-contain"> -->
            </div>
            <!-- Tulisan Sekolah yang Numpuk Ke Bawah -->
            <div class="lh-sm">
                <strong class="fs-5 d-block text-dark fw-bold">Nama Sekolah</strong>
                <small class="text-secondary opacity-75" style="font-size: 0.75rem; letter-spacing: 0.5px;">SMP / SMK / SMA</small>
            </div>
        </a>

        <!-- Tombol Menu untuk Tampilan Handphone -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavNavigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- BAGIAN TENGAH: MENU UTAMA (Otomatis Terpusat) -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavNavigasi">
            <ul class="navbar-nav gap-3 my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-bold text-primary position-relative" href="/websekolah" style="border-bottom: 3px solid #0d6efd; padding-bottom: 20px; margin-bottom: -20px;">Beranda</a>
                </li>
                <li class="nav-item"><a class="nav-link text-secondary fw-semibold" href="#">Profil ▾</a></li>
                <li class="nav-item"><a class="nav-link text-secondary fw-semibold" href="#">Akademik ▾</a></li>
                <li class="nav-item"><a class="nav-link text-secondary fw-semibold" href="#">Kesiswaan ▾</a></li>
                <li class="nav-item"><a class="nav-link text-secondary fw-semibold" href="#">Berita ▾</a></li>
                <li class="nav-item"><a class="nav-link text-secondary fw-semibold" href="/contoh">Galeri</a></li>
                <li class="nav-item"><a class="nav-link text-secondary fw-semibold" href="/websekolah">Kontak</a></li>
            </ul>
        </div>

        <!-- BAGIAN KANAN: IKON PENCARIAN (Otomatis Mengunci di Ujung Kanan) -->
        <div class="d-none d-lg-flex ms-auto align-items-center">
            <span class="fs-4 text-secondary" style="cursor: pointer; transform: scaleX(-1); display: inline-block;">🔍</span>
        </div>

    </div>
</nav>

    <!-- BAGIAN 2 -->
  <!-- CAROUSEL BANNER (VERSI RAMPING / CEMPRENG) -->
<div class="container-fluid">
    <div id="heroSlider" class="carousel slide bg-light" data-bs-ride="carousel">
    
    <!-- Indikator Garis Bawah -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <!-- Trik CSS manual: Mengunci tinggi maksimal hanya 300px agar cempreng, object-fit-cover menjaga agar gambar pas -->
            <div class="w-100 bg-secondary" style="height: 500px; overflow: hidden;">
                <img src="images_shigatsu-violin.jpg" class="w-100 h-100" style="object-position: center 25%;" alt="Spanduk Sekolah 1">
            </div>
            
            <!-- Caption teks hitam transparan di bawah -->
            <div class="carousel-caption d-none d-md-block text-start start-0 bottom-0 mb-0 p-3 w-100" style="background: rgba(0, 0, 0, 0.6); left: 0; right: 0;">
                <div class="container">
                    <h5 class="fw-bold text-white mb-1">Meraih Mimpi Bersama Kami</h5>
                    <p class="small text-white-50 mb-0">Mendukung penuh siswa dalam menuntut ilmu secara maksimal.</p>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item active">
            <!-- Trik CSS manual: Mengunci tinggi maksimal hanya 300px agar cempreng, object-fit-cover menjaga agar gambar pas -->
            <div class="w-100 bg-secondary" style="height: 500px; overflow: hidden;">
                <img src="logo-sekolah.png" class="w-100 h-100 object-fit-cover" style="object-position: center 25%;" alt="Spanduk Sekolah 1">
            </div>
            
            <!-- Caption teks hitam transparan di bawah -->
            <div class="carousel-caption d-none d-md-block text-start start-0 bottom-0 mb-0 p-3 w-100" style="background: rgba(0, 0, 0, 0.6); left: 0; right: 0;">
                <div class="container">
                    <h5 class="fw-bold text-white mb-1">Meraih Mimpi Bersama Kami</h5>
                    <p class="small text-white-50 mb-0">Mendukung penuh siswa dalam menuntut ilmu secara maksimal.</p>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item active">
            <!-- Trik CSS manual: Mengunci tinggi maksimal hanya 300px agar cempreng, object-fit-cover menjaga agar gambar pas -->
            <div class="w-100 bg-secondary" style="height: 500px; overflow: hidden;">
                <img src="images.jpg" class="w-100 h-100 object-fit-contain" style="object-position: center 25%;" alt="Spanduk Sekolah 1">
            </div>
            
            <!-- Caption teks hitam transparan di bawah -->
            <div class="carousel-caption d-none d-md-block text-start start-0 bottom-0 mb-0 p-3 w-100" style="background: rgba(0, 0, 0, 0.6); left: 0; right: 0;">
                <div class="container">
                    <h5 class="fw-bold text-white mb-1">Meraih Mimpi Bersama Kami</h5>
                    <p class="small text-white-50 mb-0">Mendukung penuh siswa dalam menuntut ilmu secara maksimal.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Navigasi Kanan Kiri -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
</div>



    <!-- BAGIAN 3 -->
        <!-- LAYOUT GRID UTAMA (KIRI VS KANAN) -->
        <div class="row mb-5 me-5 ms-5 mt-4">
            
            <!-- INTERIOR KONTEN KIRI (LEBAR: 8 UNIT) -->
            <div class="col-md-8 mb-4">
                
                <!-- KARTU SAMBUTAN KEPALA SEKOLAH -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-white"><h4 class="border-start border-primary border-5 ps-1 m-0 text-primary fw-bold">Sambutan Kepala Sekolah</h4></div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-sm-4 text-center mb-3 mb-sm-0">
                                <!-- KODE BARU (MENGGUNAKAN GAMBAR ASLI) -->
                                <img src="images.jpg" class="img-fluid rounded border shadow-sm" alt="Kepala Sekolah" style="width: 100%; max-height: 250px; object-fit: cover; object-position: top;">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="text-primary fw-bold">Assalamu'alaikum Wr. Wb.</h5>
                                <p class="text-secondary small">Tuliskan kata sambutan kepala sekolah di sini secara lengkap untuk menyambut para pengunjung website, calon siswa, serta wali murid sekalian.</p>
                                <strong class="text-dark small d-block mt-3">Kepala Sekolah</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KARTU KEGIATAN TERBARU -->
                <div class="card shadow-sm">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="border-start border-primary border-5 ps-1 m-0 text-primary fw-bold">Kegiatan Terbaru</h5>
                        <a href="#" class="small text-decoration-none">Lihat Semua Kegiatan →</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Item 1 -->
                            <div class="col-sm-6 col-md-3 mb-3">
                                <div class="card h-100 border-light-subtle">
                                    <div class="ratio ratio-16x9 bg-light">
                                    <img src="images_saitama.jpg" class="card-img-top object-fit-cover" height="130" style="object-position: top" alt="Upacara">
                                    </div>
                                    <div class="card-body p-2">
                                        <h6 class="card-title text-dark small fw-bold mb-1">Hari Pendidikan</h6>
                                        <p class="card-text text-muted small mb-0">02 Mei 2026</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="col-sm-6 col-md-3 mb-3">
                                <div class="card h-100 border-light-subtle">
                                    <div class="ratio ratio-16x9 bg-light">
                                    <img src="images.jpg" class="card-img-top object-fit-contain" height="130" alt="Upacara">
                                    </div>
                                    <div class="card-body p-2">
                                        <h6 class="card-title text-dark small fw-bold mb-1">Hari Pendidikan</h6>
                                        <p class="card-text text-muted small mb-0">02 Mei 2026</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="col-sm-6 col-md-3 mb-3">
                                <div class="card h-100 border-light-subtle">
                                    <div class="ratio ratio-16x9 bg-light">
                                    <img src="images_shigatsu-violin.jpg" class="card-img-top" height="130" alt="Upacara">
                                    </div>
                                    <div class="card-body p-2">
                                        <h6 class="card-title text-dark small fw-bold mb-1">Hari Pendidikan</h6>
                                        <p class="card-text text-muted small mb-0">02 Mei 2026</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 4 -->
                            <div class="col-sm-6 col-md-3 mb-3">
                                <div class="card h-100 border-light-subtle">
                                    <div class="ratio ratio-16x9 bg-light">
                                    <img src="images_garou.jpg" class="card-img-top object-fit-cover" height="130" alt="Upacara">
                                    </div>
                                    <div class="card-body p-2">
                                        <h6 class="card-title text-dark small fw-bold mb-1">Hari Pendidikan</h6>
                                        <p class="card-text text-muted small mb-0">02 Mei 2026</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- BAGIAN 4 -->
                        <!-- INTERIOR SIDEBAR KANAN (LEBAR: 4 UNIT) -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-white"><h5 class="border-start border-primary border-5 ps-1 m-0 text-primary fw-bold">📢 Pengumuman Terbaru</h5></div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action p-3">
                            <h6 class="mb-1 fw-bold text-dark small">Pendaftaran Siswa Baru 2025/2026</h6>
                            <small class="text-muted">📅 15 Apr 2025</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action p-3">
                            <h6 class="mb-1 fw-bold text-dark small">Jadwal Ujian Semester Genap</h6>
                            <small class="text-muted">📅 10 Apr 2025</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action p-3">
                            <h6 class="mb-1 fw-bold text-dark small">Informasi Libur Hari Raya</h6>
                            <small class="text-muted">📅 25 Mar 2025</small>
                        </a>
                    </div>
                    <div class="card-body border-top">
                        <a href="#" class="btn btn-primary btn-sm w-100 fw-bold">Lihat Semua Pengumuman</a>
                    </div>
                </div>
            </div>

        </div> <!-- Selesai Penutup .row Grid Utama -->
    </div> <!-- Selesai Penutup .container Grid Utama -->

    <!-- FOOTER HALAMAN -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row align-items-center text-center text-md-start">
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5 class="m-0 fw-bold text-primary">Nama Sekolah</h5>
                    <small class="text-muted">SMP / SMK / SMA</small>
                </div>
                <div class="col-md-4 mb-3 mb-md-0 border-start border-end border-secondary border-opacity-50 px-3">
                    <small class="d-block text-muted">Dikembangkan oleh:</small>
                    <strong>Klinik Komputer dan Audio Blitar</strong>
                </div>
                <div class="col-md-4 text-md-end">
                    <small class="text-muted">&copy; 2026 Hak Cipta Dilindungi Undang-Undang.</small>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS Bootstrap Bundle dengan Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
