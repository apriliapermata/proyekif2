<!-- File: app/Views/pelanggan/add.php -->
<?= $this->extend('layout/templatekaryawan'); ?>

<?= $this->section('title'); ?>
    <title> Tambah Data Pelanggan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data</h1>
            <div class="section-header-back">
                <a href="<?= site_url('datapelanggan') ?>" class="btn btn-success">Lihat Data Pelanggan</a>
            </div>
        </div>

        <div class="section-body" style="margin: 0 auto; max-width: 400px;">
            <div class="card">
                <div class="card-header">
                    <h4>Data Pelanggan</h4>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('datapelanggan') ?>" method="post" autocomplete="off">
                        <div class="form-group">
                            <label>Kode *</label>
                            <input type="number" name="kode" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Nama Pelanggan *</label>
                            <input type="text" name="nama" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>No Hp *</label>
                            <input type="tel" name="noHp" class="form-control" required autofocus>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Tambah</button>
                            <button type="reset" class="btn btn-secondary">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
