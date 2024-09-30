<?php
$student = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 75, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

foreach ($student as $siswa) {
    $totalNilai = array_sum($siswa['nilai']);
    $jumlahNilai = count($siswa['nilai']);
    $rataRata = $totalNilai / $jumlahNilai;
    echo $siswa['nama'] . " = " . number_format($rataRata, 2) . "<br>";
}
?>