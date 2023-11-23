<!-- File: app/Views/laporan/keuangan.php -->
<?= $this->extend('layout/templatekaryawan'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="teks">
        <h2><center>Laporan Keuangan</center></h2>

        <!-- Tambahkan konten laporan keuangan di sini -->

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Total Pendapatan</td>
                    <td>Rp 10,000,000.00 <!-- Gantilah dengan nilai yang sesuai --></td>
                </tr>
                <tr>
                    <td>Pendapatan Rata-rata per Bulan</td>
                    <td>Rp 5,000,000.00 <!-- Gantilah dengan nilai yang sesuai --></td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
<?= $this->endSection(); ?>
