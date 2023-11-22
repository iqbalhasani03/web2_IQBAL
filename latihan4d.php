<?php
$negara = [
    ["Negara" => "Indonesia", "Ibukota" => "D.K.I Jakarta", "Kode Telepon" => "+62"],
    ["Negara" => "Singapura", "Ibukota" => "Singapura", "Kode Telepon" => "+65"],
    ["Negara" => "Malaysia", "Ibukota" => "Kuala Lumpur", "Kode Telepon" => "+60"],
    ["Negara" => "Brunei", "Ibukota" => "Bandar Seri Begawan", "Kode Telepon" => "+673"],
    ["Negara" => "Thailand", "Ibukota" => "Bangkok", "Kode Telepon" => "+66"],
    ["Negara" => "Laos", "Ibukota" => "Vientiane", "Kode Telepon" => "+856"],
    ["Negara" => "Filipina", "Ibukota" => "Manila", "Kode Telepon" => "+63"],
    ["Negara" => "Myanmar", "Ibukota" => "Naypyidaw", "Kode Telepon" => "+95"],
];

echo "<table border='1'>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";

foreach ($negara as $key => $value) {
    echo "<tr>";
    foreach ($value as $item) {
        echo "<td>$item</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>