<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Koleksi Buku - SIPUSKITA</title>

    <link rel="icon" type="image/x-icon" href="<?= base_url('assets_style/image/logo_perpus.png') ?>">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets_style/landing/css/koleksi.css') ?>">
</head>
<body>

<div class="container mt-5 mb-5">

    <!-- HEADER & SEARCH -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <div class="row align-items-center">

                <!-- Judul -->
                <div class="col-md-6">
                    <h4 class="mb-0 font-weight-bold">
                        <i class="bi bi-book-half text-primary"></i>
                        Koleksi Buku Perpustakaan
                    </h4>
                </div>

                <!-- Search -->
                <div class="col-md-6">
                    <div class="input-group input-group-lg shadow-sm float-md-right mt-3 mt-md-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white border-right-0">
                                <i class="bi bi-search text-primary"></i>
                            </span>
                        </div>
                        <input type="text" id="searchInput"
                            class="form-control border-left-0"
                            placeholder="Cari judul, pengarang, penerbit...">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- TABEL BUKU -->
    <div class="card shadow-sm border-0">
        <div class="card-body table-responsive">

            <table class="table table-hover align-middle" id="bukuTable">
                <thead class="bg-primary text-white text-center">
                    <tr>
                        <th width="5%">No</th>
                        <th width="10%">Sampul</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th width="8%">Tahun</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach($buku as $b): ?>
                    <tr>
                        <td class="text-center"><?= $no++ ?></td>

                        <td class="text-center">
                            <?php if (!empty($b->sampul) && $b->sampul !== "0"): ?>
                                <img src="<?= base_url('assets_style/image/buku/'.$b->sampul) ?>"
                                     class="sampul-img">
                            <?php else: ?>
                                <i class="bi bi-image text-secondary" style="font-size:28px;"></i>
                                <div class="small text-muted">No Cover</div>
                            <?php endif; ?>
                        </td>

                        <td>
                            <strong><?= $b->title ?></strong>
                        </td>

                        <td><?= $b->pengarang ?></td>
                        <td><?= $b->penerbit ?></td>

                        <td class="text-center">
                            <span class="badge badge-secondary"><?= $b->thn_buku ?></span>
                        </td>

                        <td class="text-center">
                            <a href="<?= base_url('koleksi/detail/'.$b->id_buku) ?>"
                               class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye"></i> Detail
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>

<!-- FOOTER -->
<footer class="text-center py-4 bg-primary text-white shadow-sm">
    <p class="mb-0">&copy; <?= date('Y'); ?> SIPUSKITA - Perpustakaan Desa Pepedan 2026</p>
</footer>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- SEARCH SCRIPT -->
<script>
document.getElementById('searchInput').addEventListener('keyup', function () {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll('#bukuTable tbody tr');

    rows.forEach(function (row) {
        let text = row.innerText.toLowerCase();
        row.style.display = text.includes(filter) ? '' : 'none';
    });
});
</script>

</body>
</html>
