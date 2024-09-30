<?php

$nama1 = "Fema Flamelina Putri";
$nama2 = "Artasya Legina";

function bandingkanNama($nama1, $nama2) {
    $jumlahKarakter1 = strlen($nama1);
    $jumlahKarakter2 = strlen($nama2);

    echo "nama pertama : $nama1 <br>";
    echo "nama kedua : $nama2 <br>";
    echo "<br>";
    
    // Hitung selisih jumlah karakter
    $selisih = abs($jumlahKarakter1 - $jumlahKarakter2);
    
    // Tampilkan nama yang memiliki jumlah karakter lebih banyak dari selisih
    if ($jumlahKarakter1 > $selisih && $jumlahKarakter1 > $jumlahKarakter2) {
        echo "<u>$nama1</u> memiliki jumlah karakter lebih banyak dari <u>$nama2</u> : selisih $selisih.<br>";
    } elseif ($jumlahKarakter2 > $selisih && $jumlahKarakter2 > $jumlahKarakter1) {
        echo "<u>$nama2</u> memiliki jumlah karakter lebih banyak dari <u>$nama1</u> : selisih $selisih<br>";
    } else {
        echo "Jumlah karakter yang dimiliki sama<br>";
    }
}

bandingkanNama($nama1, $nama2);
?>
    

