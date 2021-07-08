<?php
require 'functions.php';

//cek apakah tombol sudah ditekan apa belum!!
if (isset($_POST["submit"])) {

    // var_dump(($_POST));
    // die;
    //query insert data

    //cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>        
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan!');
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Alat</title>
</head>

<body>
    <h1>Tambah Data Alat</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="namaAlat">Nama Alat :</label>
                <input type="text" name="namaAlat" id="namaAlat" required>
            </li>

            <li>
                <label for="namaKategori">Nama Kategori :</label>
                <input type="text" name="namaKategori" id="namaKategori" required>
            </li>

            <li>
                <label for="kodeKategori">Kode Kategori :</label>
                <input type="text" name="kodeKategori" id="kodeKategori" required>
            </li>

            <li>
                <label for="harga">Harga :</label>
                <input type="number" name="harga" id="harga" required>
            </li>

            <li>
                <label for="keterangan">Keterangan :</label>
                <input type="text" name="keterangan" id="keterangan" required>
            </li>

            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>


    </form>
</body>

</html>