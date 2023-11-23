<!-- File: app/Views/pelanggan/index.php -->
<?= $this->extend('layout/templatekaryawan'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="teks">
        <h2><center>Data Pelanggan</center></h2>

        <!-- Tambahkan konten data pelanggan di sini -->

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor HP</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>John Doe</td>
                    <td>081234567890</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jane Doe</td>
                    <td>085678901234</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
<?= $this->endSection(); ?>
