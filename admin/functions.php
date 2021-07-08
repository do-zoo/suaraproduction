<?php
// koneksi ke database
// $conn = mysqli_connect("localhost", "root", "", "suara_production");

$conn = mysqli_connect("localhost", "n1498735_sp_admin", "31Oktober88", "n1498735_suara_production");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{

    global $conn;
    //ambil data dari tiap elemen form
    $namaKategori = htmlspecialchars($data["namaKategori"]);
    $kodeKategori = htmlspecialchars($data["kodeKategori"]);
    $namaAlat = htmlspecialchars($data["namaAlat"]);
    $harga = htmlspecialchars($data["harga"]);
    $keterangan = htmlspecialchars($data["keterangan"]);


    //upload gambar dulu
    // $image = upload();
    // if (!$image) {
    //     return false;
    // }

    $query = "INSERT INTO data_peralatan
                VALUES
                ('', '$namaKategori', '$kodeKategori', '$namaAlat', '$harga', '$keterangan')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//ubah data
function ubah($data)
{
    global $conn;

    $id = $data["ID"];
    //ambil data dari tiap elemen form
    $namaKategori = htmlspecialchars($data["namaKategori"]);
    $kodeKategori = htmlspecialchars($data["kodeKategori"]);
    $namaAlat = htmlspecialchars($data["namaAlat"]);
    $harga = htmlspecialchars($data["harga"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    // //cekapakah user pilih gambar baru atau tidak
    // if ($_FILES['image']['error'] === 4) {
    //     $image = $imageLama;
    // } else {
    //     $image = upload();
    // }

    $query = "UPDATE data_peralatan SET
                Nama Kategori = '$namaKategori',
                Kode Kategori = '$kodeKategori',
                Nama Alat = '$namaAlat',
                Harga = '$harga',
                Keterangan = '$keterangan'
                WHERE ID = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
