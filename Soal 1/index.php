<?php 
function cekAngka($kalimat) {
    if(preg_match_all('/\d/', $kalimat, $angka)) {
        $mempunyai_angka = implode (', ', $angka[0]);
        echo "Teks mengandung  angka : $mempunyai_angka"  ;
    } else {
        echo "Teks tidak mengandung angka";
    }
}

$kalimat1 = "<b>Selamat ulang tahun yang ke-17!</b>";
$kalimat2 = "<b>Selamat ulang tahun ya!</b>";

echo $kalimat1;
echo "<br>";
 cekAngka($kalimat1);
echo "<br>";
echo "<br>"; 
echo $kalimat2;
echo "<br>";
 cekAngka($kalimat2);

?>