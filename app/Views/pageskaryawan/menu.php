<!-- File: app/Views/pageskaryawan/menu.php -->

<?= $this->extend('layout/templatekaryawan'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Popup container - can be anything you want */
        .popup {
            position: relative;
            display: inline-block;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* The actual popup */
        .popup .popuptext {
            visibility: hidden;
            width: 160px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 8px 0;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -80px;
        }

        /* Popup arrow */
        .popup .popuptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        /* Toggle this class - hide and show the popup */
        .popup .show {
            visibility: visible;
            -webkit-animation: fadeIn 1s;
            animation: fadeIn 1s;
        }

        /* Add animation (fade in the popup) */
        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body style="text-align:center">

    <div class="container" >
        <div class="row">
            <div class="col">
                <h1 class="mt-2">
                    <center>Daftar Menu</center>
                </h1>

                <body>
                    <div class="button-container">
                        <a href="/menu/tambahmenu" class="btn btn-success" onclick ="alert('ingin menambah menu ?')" >Tambah Menu</a>

                    </div>
                </body>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($menu as $key => $m) : ?>
                            <tr>
                                <th scope="row"><?= $key + 1 ?></th>
                                <td><img src="<?= base_url('img/' . $m['gambar']) ?>" alt="<?= $m['namaProduk'] ?>" class="gambar"></td>
                                <td><?= $m['kodeProduk'] ?></td>
                                <td><?= $m['kategori'] ?></td>
                                <td><?= $m['namaProduk'] ?></td>
                                <td>Rp <?= $m['harga'] ?></td>
                                <td><img src="<?= base_url('img/' . $m['action']) ?>" alt="Action" class="action" ></td>

                            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>