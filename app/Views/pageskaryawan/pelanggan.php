<!-- File: app/Views/pelanggan/index.php -->
<?= $this->extend('layout/templatekaryawan'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="text-center">
        <h2 class="mb-4">Data Pelanggan</h2>
    </div>
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('tambahdata') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Baru</a>
        </div>

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Success</b>
                    <?= session()->getFlashdata('success') ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- Tambahkan konten data pelanggan di sini -->
        <div class="section-body">
            <div class="card">

            </div>
            <div class="card-header">

            </div>
            <div class="card body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Nomor Hp</th>
                            <th>Aksi</th>
                        </tr>
                        <!-- View: pelanggan/index.php -->

                        <?php foreach ($pelanggan as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value['kode'] ?></td>
                                <td><?= $value['nama'] ?></td>
                                <td><?= $value['noHp'] ?></td>
                                <td><a href="<?= site_url('editdata/' . $value['kode']) ?>" class="btn btn-secondary">Edit</a></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <?= $this->endSection() ?>