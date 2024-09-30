<?php
$uang = 140500;
function hitungPecahanUang($uang) {
    $pecahan_rupiah = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];

    echo "Uang: Rp. " . number_format($uang, 0, ',', '.') . "<br>";
    echo "Lembar Rupiah : <br>" ;

    foreach ($pecahan_rupiah as $nilai) {
        if ($uang >= $nilai) {
            $lembar = floor($uang / $nilai);
            $uang = $uang % $nilai; 
            echo "<li>Rp. " . number_format($nilai, 0, ',', '.') . " : " . $lembar . "<br>" . "</li>";
        }
    }
}
hitungPecahanUang($uang);
