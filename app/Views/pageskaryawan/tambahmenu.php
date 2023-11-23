
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu</title>
    <style>
        body {
            background-image: url('/img/coffeeshop.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: #FFFFFF;
            font-size: 40px;
        }


        form {
            max-width: 400px;
            background-color: #996633;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            /* Menambah margin atas untuk memberikan ruang antara judul dan formulir */
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #080000;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #663300;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #663300;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #a08845;

        }

        input[type="file"] {
            margin-top: 4px;
            border: 1px solid #663300;
        }
    </style>
</head>

<body>

    <h2>Tambah Menu</h2>

    <form action="/menu" method="post" enctype="multipart/form-data">

        <label for="kode-menu">Kode</label>
        <input type="text" id="kode-menu" name="kode_menu" required>

        <label for="kategori-menu">Kategori</label>
        <select id="kategori-menu" name="kategori_menu" required>
            <option value="Makan">Makanan</option>
            <option value="Minuman">Minuman</option>
        </select>

        <label for="nama-menu">Nama</label>
        <input type="text" id="nama-menu" name="nama_menu" required>

        <label for="harga-menu">Harga</label>
        <input type="number" id="harga-menu" name="harga_menu" required>

        <label for="gambar-menu">Gambar</label>
        <input type="file" id="gambar-menu" name="gambar_menu" accept="image/*" required>

        <input type="submit" value="Tambah Menu">
    </form>

</body>

</html>
