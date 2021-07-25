<?php
usleep(500000);
require '../functions.php';

$value = $_GET["value"];
$query = "SELECT * FROM data_paket_webinar
            WHERE 
        id = $value";
$dataProperPack = query($query);
?>


<div class="price-cont">
    <div class="price-isi">
        <span>
            <?= buatRp($dataProperPack[0]["harga"]); ?>
        </span>
    </div>
</div>
<div class="detail-tools">
    <div class="tools-judul">
        <span>Tools</span>
    </div>
    <?= $dataProperPack[0]["tools"] ?>

</div>

<div class="detail-main-power">
    <div class="main-power-judul">
        <span>Main Power</span>
    </div>
    <?= $dataProperPack[0]["main_power"] ?>
</div>