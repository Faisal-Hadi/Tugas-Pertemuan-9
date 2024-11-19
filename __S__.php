<?php
// Array data mahasiswa
$mahasiswa = [
    [
        'Nim' => '312310119',
        'Nama' => 'Faisal Hadi Saputra',
        'Kelas' => 'TI.23.CA.1'
    ],
];

// Menampilkan data mahasiswa
foreach ($mahasiswa as $mhs) {
    echo "NIM: " . $mhs['Nim'] . "<br>";
    echo "Nama: " . $mhs['Nama'] . "<br>";
    echo "Kelas: " . $mhs['Kelas'] . "<br><br>";
}
?>
