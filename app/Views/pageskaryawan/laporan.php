<!-- File: app/Views/laporan/keuangan.php -->
<!-- <!DOCTYPE html>
<html lang="en"> -->
  <!-- <head> -->
  <?= $this->extend('layout/templatekaryawan'); ?>
  <!-- </head> -->
  <!-- <body> -->
<?= $this->section('content'); ?>
<div class="container">
    <div class="teks">
        <h2><center>Laporan Keuangan</center></h2>

        <!-- Tambahkan konten laporan keuangan di sini -->

        <div style="display: flex; justify-content: center;">
    <!-- Card Pendapatan Total -->
    <div class="card" style="margin: 30px; ">
        <div class="card-body" style="display: flex; align-items: center;">
            <img src="/img/PENDAPATAN.png" class="gambar" alt="...">
            <div style="margin-left: 15px;">
                <h5 class="card-title">Pendapatan Total</h5>
                <p class="card-text">Rp18.900.000</p>
                <a href="#" class="btn btn-primary">Lihat Rincian</a>
            </div>
        </div>
    </div>
    <!-- Card Pendapatan Rata-rata -->
    <div class="card" style="margin: 30px; ">
        <div class="card-body" style="display: flex; align-items: center;">
            <img src="/img/RATA.png" class="gambar" alt="...">
            <div style="margin-left: 15px;">
                <h5 class="card-title">Pendapatan Rata-rata</h5>
                <p class="card-text">Rp4.725.000</p>
                <a href="#" class="btn btn-primary">Lihat Rincian</a>
            </div>
        </div>
    </div>
</div>



    

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
<!-- </body> -->
<?= $this->endSection(); ?>
