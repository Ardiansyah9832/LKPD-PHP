<?php
$angka = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;
function munculAngka($angka, $cari) {
    $jumlah = 0;
    foreach ($angka as $data) {
        if ($data == $cari) {
            $jumlah++;
        }
    }
    echo "Jumlah angka $cari = $jumlah";
}
munculAngka($angka, $cari);
?>