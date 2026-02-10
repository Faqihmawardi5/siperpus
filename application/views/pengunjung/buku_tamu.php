<!-- Bootstrap 5 CSS -->
<link rel="stylesheet" href="<?= base_url('assets_style/bootstrap/css/bootstrap.min.css') ?>">
<!-- Bootstrap Icons (opsional, untuk icon) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="icon" type="image/x-icon" href="<?= base_url('assets_style/image/logo_perpus.png') ?>" />
<!-- CSS tambahan -->
<link rel="stylesheet" href="<?= base_url('assets_style/css/custom.css') ?>">
<body style="background: url('<?= base_url('assets_style/image/bg1~4.jpg') ?>') no-repeat center center fixed; background-size: cover;">
<div class="container py-5">
    <br><br><br>

    <!-- Alert sukses -->
    <?php if($this->session->flashdata('pesan')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill"></i>
            <?= $this->session->flashdata('pesan'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

        <!-- Form Buku Tamu Centered -->
        <div class="d-flex justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-sm border-primary h-100" style="background: rgba(255,255,255,0.9);">
                
                <!-- Logo -->
                <div class="text-center mt-4">
                    <img src="<?= base_url('assets_style/image/logo_desa.png') ?>" alt="Logo Desa" style="width:80px; height:80px;">
                    <br><br><h5 class="mb-0">Presensi Pengunjung</h5>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <form action="<?= base_url('bukutamu/simpan') ?>" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nama :</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat :</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keperluan :</label>
                            <textarea name="keperluan" class="form-control" rows="3" placeholder="Keperluan kunjungan" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-send-fill me-1"></i> <b>Submit</b>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
