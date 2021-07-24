<?php
$conn = mysqli_connect("localhost", "root", "", "suara_production");

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


function buatRp($angka)
{
    $rupiah = "Rp. " . number_format($angka, 0, ',', '.');
    return $rupiah;
}
