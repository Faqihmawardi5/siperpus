<div class="content-wrapper">
    <section class="content-header"><br>
        <h1><?= $title_web; ?></h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <a href="<?= base_url('laporan/cetak_jumlah_data'); ?>"
                   target="_blank"
                   class="btn btn-danger">
                    <i class="glyphicon glyphicon-print"></i> <b>Cetak</b>
                </a>
            </div>

            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th width="40%">Jumlah Buku</th>
                        <td><?= $count_buku; ?></td>
                    </tr>
                    <tr>
                        <th>Jumlah Anggota</th>
                        <td><?= $count_anggota; ?></td>
                    </tr>
                    <tr>
                        <th>Buku Dipinjam</th>
                        <td><?= $count_pinjam; ?></td>
                    </tr>
                    <tr>
                        <th>Buku Dikembalikan</th>
                        <td><?= $count_kembali; ?></td>
                    </tr>
                    <tr>
                        <th>Jumlah Pengunjung</th>
                        <td><?= $count_pengunjung; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
</div>
