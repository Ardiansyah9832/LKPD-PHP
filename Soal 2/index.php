<?php
function hitung_kompensasi($jam_masuk, $jam_pulang) {
    $total_jam_kerja = $jam_pulang - $jam_masuk;
    $jam_lembur = max(0, $total_jam_kerja - 8);
    $kompensasi = 0;
    
    if ($jam_lembur > 0) {
        $kompensasi += 50000;
        $jam_lembur--;
        $kompensasi += $jam_lembur * 25000;
    }
    
    return [
        "lama_kerja" => $total_jam_kerja,
        "jam_lembur" => $total_jam_kerja > 8 ? $total_jam_kerja - 8 : 0,
        "kompensasi" => "Rp. " . number_format($kompensasi, 0, ',', '.')
    ];
}

$jam_masuk = 8;  
$jam_pulang = 22;  
$hasil = hitung_kompensasi($jam_masuk, $jam_pulang);
echo "Lama Kerja: " . $hasil['lama_kerja'] . " jam\n";
echo "<br>";
echo "Jam Lembur: " . $hasil['jam_lembur'] . " jam\n";
echo "<br>";
echo "Jumlah Kompensasi: " . $hasil['kompensasi'] . "\n";
?>