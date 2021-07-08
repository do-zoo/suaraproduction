<?php
require 'functions.php';
$dbName = "data_peralatan";

$dataItems = query("SELECT * FROM $dbName");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - SUARA PRODUCTION</title>
</head>

<body>
    <h1>Tabel Data Alat-Alat</h1>


    <div class="container">
        <div class="pengubahan">
            <a href="add-data.php">Tambah Alat</a>
            <!-- <a href="change-data.php">Ubah Alat</a> -->
        </div>

        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No.</th>
                <th>Nama Kategori</th>
                <th>Kode Kategori</th>
                <th>Nama Alat</th>
                <th>Harga</th>
                <th>Keterangan</th>
            </tr>

            <?php $i = 1 ?>
            <?php foreach ($dataItems as $row) : ?>


                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["Nama Kategori"]; ?></td>
                    <td><?= $row["Kode Kategori"]; ?></td>
                    <td><?= $row["Nama Alat"]; ?></td>
                    <td><?= $row["Harga"]; ?></td>
                    <td><?= $row["Keterangan"]; ?></td>
                </tr>
                <?php $i++; ?>

            <?php endforeach; ?>

            <br>



        </table>
    </div>
</body>

</html>