<?php
// Indexed Array
$colors = array("Red", "Green", "Blue");

// Mengakses nilai array
echo "Warna pertama: " . $colors[0] . "<br>";
echo "Warna kedua: " . $colors[1] . "<br>";
echo "Warna ketiga: " . $colors[2] . "<br>";

// Menambah nilai ke array
$colors[] = "Yellow";

// Menampilkan isi array setelah penambahan
echo "Warna keempat: " . $colors[3] . "<br>";

// Menghitung jumlah elemen dalam array
echo "Jumlah warna: " . count($colors);
?>