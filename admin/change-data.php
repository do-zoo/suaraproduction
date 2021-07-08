<?php
// session_start();

// if (!isset($_SESSION["login"])) {
//     header("Location: login.php");
//     exit;
// }

require 'functions.php';

//ambil data di URL
$id = $_GET["ID"];

//query data mahasiswa berdasarkan id
$alat = query("SELECT * FROM data_peralatan 
                WHERE ID = $id;
")[0];

//cek apakah tombol sudah ditekan apa belum!!
if (isset($_POST["submit"])) {


    //query insert data

    //cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>        
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
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
    <title>Ubah data Mahasiswa</title>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $alat["ID"]; ?>">
        <ul>
            <li>
                <label for="namaAlat">Nama Alat :</label>
                <input type="text" name="namaAlat" id="namaAlat" required value="<?= $alat["Nama Alat"]; ?>">
            </li>

            <li>
                <label for="namaKategori">Nama Kategori :</label>
                <input type="text" name="namaKategori" id="namaKategori" required value="<?= $alat["Nama Kategori"]; ?>">
            </li>

            <li>
                <label for="kodeKategori">Kode Kategori :</label>
                <input type="text" name="kodeKategori" id="kodeKategori" required value="<?= $alat["Kode Kategori"]; ?>">
            </li>

            <li>
                <label for="harga">Harga :</label>
                <input type="number" name="harga" id="harga" required value="<?= $alat["Harga"]; ?>">
            </li>

            <li>
                <label for="keterangan">Keterangan :</label>
                <input type="number" name="keterangan" id="keterangan" required value="<?= $alat["Keterangan"]; ?>">
            </li>

            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>


    </form>
</body>

</html>