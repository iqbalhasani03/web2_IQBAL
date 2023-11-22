<?php

// Membuat array dengan 5 negara ASEAN
echo "<b>Daftar Negara ASEAN awal</b>";
$negara = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

// Menampilkan seluruh isi array negara dalam bentuk list html
echo "<ul>";
foreach ($negara as $value) {
    echo "<li>$value</li>";
}
echo "</ul>";

// Menambahkan 3 negara baru ke array negara
echo "<b> Daftar Negara ASEAN baru</b>";
array_push($negara, "Laos", "Filipina", "Myanmar");

// Menampilkan array negara yang telah diubah menjadi list html
echo "<ul>";
foreach ($negara as $value) {
    echo "<li>$value</li>";
}
echo "</ul>";

?>