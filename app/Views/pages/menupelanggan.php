<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">
                <center>Daftar Menu</center>
            </h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="/img/kopi1.jpg" alt=" " class="gambar"></td>
                        <td>001</td>
                        <td>Minuman</td>
                        <td>Espresso</td>
                        <td>25000</td>
                        <td>
                            <a href="" class="btn btn-success">Tambah</a>
                            <a href="" class="btn btn-success">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><img src="/img/kopi2.jpg" alt=" " class="gambar"></td>
                        <td>002</td>
                        <td>Minuman</td>
                        <td>Moccacino</td>
                        <td>25000</td>
                        <td>
                            <a href="" class="btn btn-success">Tambah</a>
                            <a href="" class="btn btn-success">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><img src="/img/ice tea.jpg" alt=" " class="gambar"></td>
                        <td>003</td>
                        <td>Minuman</td>
                        <td>Lemon Tea</td>
                        <td>20000</td>
                        <td>
                            <a href="" class="btn btn-success">Tambah</a>
                            <a href="" class="btn btn-success">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td><img src="/img/strawberry cocktail.jpg" alt=" " class="gambar"></td>
                        <td>004</td>
                        <td>Minuman</td>
                        <td>Strawberry Cocktail</td>
                        <td>22000</td>
                        <td>
                            <a href="" class="btn btn-success">Tambah</a>
                            <a href="" class="btn btn-success">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td><img src="/img/matcha chocolate.jpg" alt=" " class="gambar"></td>
                        <td>005</td>
                        <td>Minuman</td>
                        <td>Matcha Chocolate</td>
                        <td>22000</td>
                        <td>
                            <a href="" class="btn btn-success">Tambah</a>
                            <a href="" class="btn btn-success">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td><img src="/img/Fruit Cocktail.jpg" alt=" " class="gambar"></td>
                        <td>006</td>
                        <td>Minuman</td>
                        <td>Fruit Cocktail</td>
                        <td>22000</td>
                        <td>
                            <a href="" class="btn btn-success">Tambah</a>
                            <a href="" class="btn btn-success">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td><img src="/img/cream cake.jpg" alt=" " class="gambar"></td>
                        <td>007</td>
                        <td>Makanan</td>
                        <td>Cream Cake</td>
                        <td>22000</td>
                        <td>
                            <a href="" class="btn btn-success">Tambah</a>
                            <a href="" class="btn btn-success">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td><img src="/img/cheesecake.jpg" alt=" " class="gambar"></td>
                        <td>008</td>
                        <td>Makanan</td>
                        <td>Cheese Cake</td>
                        <td>25000</td>
                        <td>
                            <a href="" class="btn btn-success">Tambah</a>
                            <a href="" class="btn btn-success">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td><img src="/img/croissant.jpg" alt=" " class="gambar"></td>
                        <td>009</td>
                        <td>Makanan</td>
                        <td>Croissant</td>
                        <td>22000</td>
                        <td>
                            <a href="" class="btn btn-success">Tambah</a>
                            <a href="" class="btn btn-success">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td><img src="/img/ice cream.jpg" alt=" " class="gambar"></td>
                        <td>010</td>
                        <td>Makanan</td>
                        <td>Ice Cream</td>
                        <td>20000</td>
                        <td>
                            <a href="" class="btn btn-success">Tambah</a>
                            <a href="" class="btn btn-success">Hapus</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>







<?= $this->endSection(); ?>