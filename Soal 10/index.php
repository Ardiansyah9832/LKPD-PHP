<?php
$data = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
$anak_anak = 0;
$dewasa = 0;

foreach($data as $usia){
    if($usia < 17){
        $anak_anak++;
    } else{
        $dewasa++;
    }
}

echo "List Usia : " . implode(", ", $data) . "<br>";
echo "Jumlah Kategori Dewasa : $dewasa" . "<br>";
echo "Jumlah Kategori Anak-Anak : $anak_anak" . "<br>";
?>