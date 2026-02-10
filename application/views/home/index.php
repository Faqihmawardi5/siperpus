<!-- File: application/views/index.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>SIPUSKITA PEPEDAN | Sistem Informasi Perpustakaan Pustaka Kita Desa Pepedan</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets_style/image/logo_perpus.png') ?>" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link href="<?= base_url('assets_style/landing/css/styles.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets_style/landing/css/styles2.css') ?>" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background: rgba(0,0,0,0.8); z-index:100;">
    <div class="container">
        <!-- Logo dan Judul -->
        <a class="navbar-brand d-flex align-items-center" href="<?= base_url('') ?>">
        <img src="<?= base_url('assets_style/image/logo_desa.png') ?>" alt="Logo Desa" style="width:30px; height:30px;" class="me-2">
        SIPUSKITA
        </a>

        <!-- Marquee -->
        <div class="d-none d-lg-block" style="max-width: 400px; overflow:hidden;">
        <marquee behavior="scroll" direction="left" scrollamount="5" class="text-light">
            Sistem Informasi Perpustakaan Pustaka Kita Desa Pepedan
        </marquee>
        </div>

        <!-- Toggler untuk mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link text-light" href="<?= base_url('') ?>">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="#tentang">Tentang</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="<?= base_url('koleksi') ?>">Koleksi Buku</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="<?= base_url('bukutamu') ?>">Buku Tamu</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="<?= base_url('login') ?>">Login</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <!-- Header -->
    <header class="masthead slideshow-header d-flex align-items-center justify-content-center">
        <div class="overlay"></div> <!-- Optional overlay for better readability -->
        <div class="container text-white text-center position-relative z-index-1">
            <h1 class="mb-4">Selamat Datang</h1>
            <h3>Di Sistem Informasi Perpustakaan Pustaka Kita Desa Pepedan</h3>
            <p class="lead">Temukan koleksi buku terbaik untuk Anda baca dan pelajari.</p>
            <a href="<?= base_url('koleksi') ?>" class="btn btn-primary btn-lg mt-3">Koleksi Buku</a>
        </div>
    </header>

    <!-- Tentang -->
    <section id="tentang" class="about-section text-center py-5" style="background-color:#f0f8ff;">
        <div class="container">
            <h2 class="mb-4">Tentang SIPUSKITA Desa Pepedan</h2>
            <p class="lead mb-5">
                SIPUSKITA adalah Sistem Informasi Perpustakaan Desa Pepedan yang menyediakan kemudahan 
                dalam mencari, meminjam, dan mengelola koleksi buku. Dengan sistem ini, masyarakat dapat 
                mengakses informasi buku kapan saja dan di mana saja.
            </p>
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-item mx-auto mb-5">
                        <div class="about-icon d-flex">
                            <i class="bi bi-journal-bookmark-fill m-auto text-primary" style="font-size: 2rem;"></i>
                        </div>
                        <h4>Koleksi Buku Lengkap</h4>
                        <p>Berbagai jenis buku tersedia untuk semua kalangan usia dan minat.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-item mx-auto mb-5">
                        <div class="about-icon d-flex">
                            <i class="bi bi-people-fill m-auto text-primary" style="font-size: 2rem;"></i>
                        </div>
                        <h4>Layanan Ramah</h4>
                        <p>Petugas siap membantu Anda dalam pencarian dan peminjaman buku.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-item mx-auto mb-5">
                        <div class="about-icon d-flex">
                            <i class="bi bi-clock-history m-auto text-primary" style="font-size: 2rem;"></i>
                        </div>
                        <h4>Akses Mudah</h4>
                        <p>Sistem online memudahkan pencarian dan pengajuan peminjaman buku.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Dokumentasi Kegiatan -->
    <section class="bg-light py-5" id="dokumentasi">
        <div class="container text-center">
            <h3 class="mb-4">Dokumentasi Kegiatan Perpustakaan</h3>
            <p class="mb-5">Berikut beberapa dokumentasi kegiatan literasi, pelatihan, dan layanan perpustakaan.</p>
            <div class="row">
                <?php if (!empty($kegiatan)): ?>
                    <?php foreach($kegiatan as $row): ?>
                        <div class="col-md-4 mb-4">
                            <img src="<?= base_url('assets_style/image/kegiatan/'.$row->gambar) ?>" alt="<?= $row->judul ?>" class="img-fluid rounded shadow-sm" style="height: 200px; object-fit: cover;">
                            <p class="mt-2"><?= $row->judul ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12">
                        <p>Belum ada dokumentasi kegiatan.</p>
                    </div>
                <?php endif; ?>
    </section>

    <!-- Footer -->
    <footer class="footer text-light" style="background-color: #0000ff; padding: 40px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start my-auto">
                <p>Jl. KH. Anshor Desa Pepedan, Kecamatan Tonjong, Kabupaten Brebes</p>
                    <p class="small mb-4 mb-lg-0">&copy; SIPUSKITA - Perpustakaan Desa Pepedan 2026</p>
                </div>
                <div class="col-lg-6 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-4">
                            <a href="http://www.facebook.com/profile.php?id=61563339069000" class="text-white">
                                <i class="bi-facebook fs-3"></i>
                            </a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="http://www.instagram.com/pemdes.pepedan?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-white">
                                <i class="bi-instagram fs-3"></i>
                            </a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="mailto:kantordesapepedan2018@gmail.com" class="text-white">
                                <i class="bi-envelope fs-3"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://wa.me/6282324389815" target="_blank" class="text-white">
                                <i class="bi-whatsapp fs-3"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/landing/js/scripts.js') ?>"></script>
</body>

</html>
