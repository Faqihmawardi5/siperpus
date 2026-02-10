<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/png/jpg" href="assets_style/image/logo_desa.png">
    <title>Laporan Jumlah Data</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 12pt;
            margin: 30px;
        }

        .kop {
            width: 100%;
            border-bottom: 3px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .kop img {
            width: 80px;
        }

        .judul {
            text-align: center;
            font-weight: bold;
            font-size: 15pt;
        }

        .alamat {
            text-align: center;
            font-size: 11pt;
        }

        table.data {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table.data th, table.data td {
            border: 1px solid #000;
            padding: 8px;
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
<table class="kop">
    <tr>
        <td width="15%">
            <img src="<?= base_url('assets_style/image/logo_desa.png'); ?>">
        </td>
        <td width="70%">
            <div class="judul">
                PERPUSTAKAAN "PUSTAKA KITA"<br>
                DESA PEPEDAN KECAMATAN TONJONG
            </div>
            <div class="alamat">
                Jl. KH. Anshor Pepedan, Tonjong, Brebes, Jawa Tengah 52271<br>
                Telp: 082324389815
            </div>
        </td>
        <td width="15%" align="right">
            <img src="<?= base_url('assets_style/image/logo_perpus.png'); ?>">
        </td>
    </tr>
</table>

<h3 style="text-align:center;">LAPORAN UMUM PERPUSTAKAAN</h3>

<!-- DATA -->
<table class="data">
    <thead>
        <tr>
            <th width="10%">No</th>
            <th width="60%">Rician</th>
            <th width="30%">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td align="center">1</td>
            <td>Jumlah Buku</td>
            <td align="center"><?= $count_buku; ?></td>
        </tr>
        <tr>
            <td align="center">2</td>
            <td>Jumlah Anggota</td>
            <td align="center"><?= $count_anggota; ?></td>
        </tr>
        <tr>
            <td align="center">3</td>
            <td>Buku Dipinjam</td>
            <td align="center"><?= $count_pinjam; ?></td>
        </tr>
        <tr>
            <td align="center">4</td>
            <td>Buku Dikembalikan</td>
            <td align="center"><?= $count_kembali; ?></td>
        </tr>
        <tr>
            <td align="center">5</td>
            <td>Jumlah Pengunjung</td>
            <td align="center"><?= $count_pengunjung; ?></td>
        </tr>
    </tbody>
</table>

<!-- TANDA TANGAN -->
<table class="ttd" width="100%">
    <tr>
        <td width="60%"></td>
        <td align="center">
            Pepedan, <?= date('d M Y'); ?><br>
            Kepala Perpustakaan<br><br><br><br>
            <strong><u>ADE NURDIYAN, MH.</u></strong>
        </td>
    </tr>
</table>

</body>
</html>
