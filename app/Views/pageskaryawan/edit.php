<!-- File: app/Views/pelanggan/edit.php -->
<?= $this->extend('layout/templatekaryawan'); ?>

<?= $this->section('title'); ?>
<title> Tambah Data Pelanggan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('datapelanggan') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Data</h1>
    </div>

    <div class="section-body col-md-6">

        <div class="card">
            <div class="card-header col-md-6">
                <h4>Data Pelanggan</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('/' . $pelanggan['kode']) ?>" method="post" autocomplete="off">
                    <div class="form-group">
                        <label>Kode *</label>
                        <input type="number" name="kode" value="<?= $pelanggan['kode'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Pelanggan *</label>
                        <input type="text" name="nama" value="<?= $pelanggan['nama'] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>No Hp *</label>
                        <input type="tel" name="noHp" value="<?= $pelanggan['noHp'] ?>" class="form-control" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>