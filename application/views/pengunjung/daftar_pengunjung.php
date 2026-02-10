<div class="content-wrapper">
    <section class="content-header">
        <h1><?= $title_web; ?></h1>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <div class="btn">
                    <button onclick="printPengunjung()" class="btn btn-danger">
                        <i class="glyphicon glyphicon-print"></i><b> Cetak</b>
                    </button>
                </div>
            </div>

            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="pengunjungTable">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Keperluan</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($pengunjung as $p): ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td><?= htmlspecialchars($p->nama); ?></td>
                            <td><?= htmlspecialchars($p->alamat); ?></td>
                            <td><?= htmlspecialchars($p->keperluan); ?></td>
                            <td><?= date('d/m/Y', strtotime($p->tanggal_kunjungan)); ?></td>
                            <td><?= htmlspecialchars($p->waktu_kunjungan); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<script>
function printPengunjung() {
    var table = document.getElementById('pengunjungTable').outerHTML;
    var win = window.open('', '_blank');

    win.document.write(`
    <html>
    <head>
        <title>Laporan Data Pengunjung</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 30px;
                font-size: 12px;
            }

            .kop {
                width: 100%;
                border-bottom: 3px solid #000;
                padding-bottom: 10px;
                margin-bottom: 20px;
            }

            .kop td {
                vertical-align: middle;
            }

            .kop img {
                width: 80px;
            }

            .kop .judul {
                text-align: center;
                font-weight: bold;
                font-size: 15px;
                line-height: 1.4;
            }

            .kop .alamat {
                font-size: 11px;
                text-align: center;
            }

            table.data {
                width: 100%;
                border-collapse: collapse;
                margin-top: 15px;
            }

            table.data th, table.data td {
                border: 1px solid #000;
                padding: 6px;
            }

            table.data th {
                text-align: center;
            }

            .ttd {
                margin-top: 50px;
            }
        </style>
    </head>

    <body onload="window.print()">

        <!-- KOP SURAT -->
        <table class="kop" width="100%">
            <tr>
                <td width="15%">
                    <img src="<?= base_url('assets_style/image/logo_desa.png') ?>">
                </td>
                <td width="70%">
                    <div class="judul">
                        PERPUSTAKAAN "PUSTAKA KITA"<br>
                        DESA PEPEDAN KECAMATAN TONJONG
                    </div>
                    <div class="alamat">
                        Jl. KH. Anshor Pepedan, Tonjong, Brebes, Jawa Tengah 52271<br>
                        Email: kantordesapepedan2018@gmail.com | Telp: 082324389815
                    </div>
                </td>
                <td width="15%" align="right">
                    <img src="<?= base_url('assets_style/image/logo_perpus.png') ?>">
                </td>
            </tr>
        </table>

        <h4 style="text-align:center;">LAPORAN DATA PENGUNJUNG PERPUSTAKAAN</h4>

        <!-- TABEL DATA -->
        ${table.replace('table table-bordered table-striped','data')}

        <!-- TANDA TANGAN -->
        <table class="ttd" width="100%">
            <tr>
                <td width="60%"></td>
                <td align="center">
                    Pepedan, <?= date('d M Y') ?><br>
                    Kepala Perpustakaan<br><br><br><br>
                    <strong><u>ADE NURDIYAN, MH.</u></strong>
                </td>
            </tr>
        </table>

    </body>
    </html>
    `);

    win.document.close();
}
</script>
