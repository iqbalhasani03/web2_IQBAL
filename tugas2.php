<!DOCTYPE html>
<html>
<head>
    <style>
        .garis-hitam {
            width: 100%;
            border-collapse: collapse;
        }
        .garis-hitam th, .garis-hitam td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .garis-hitam th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// buat data
$Assosiative_array = array(
    array("Nama" => "Alphabet",
        "Lokasi" => "Menlo Park, California",
        "Penemu" => "Larry Page and Sergey Brin",
        "Sektor" => "Internet",
        "Gambar" => "alphabet.png"),
    array("nama" => "Apple",
        "lokasi" => "Cupertino, California",
        "penemu" => "Steve Jobs, Steve Wozniak, and Ronald Wayne",
        "sektor" => "Technology",
        "gambar" => "apple.png"),
    array("nama" => "Microsoft Corporation",
        "lokasi" => "Redmond, Washington, AS",
        "penemu" => "Bill Gates, Paul Allen",
        "sektor" => "Perangkat lunak",
        "gambar" => "microsoft.png"),
    array("nama" => "Google LLC",
        "lokasi" => "Mountain View, California, AS",
        "penemu" => "Larry Page, Sergey Brin",
        "sektor" => "Teknologi pencarian online",
        "gambar" => "google.png"),
    array("nama" => "Samsung Electronics",
        "lokasi" => "Suwon, Korea Selatan",
        "penemu" => "Lee Byung-chul",
        "sektor" => "Elektronik konsumen",
        "gambar" => "samsung.png"),
    array("nama" => "Amazon.com, Inc.",
        "lokasi" => "Seattle, Washington, AS",
        "penemu" => "Jeff Bezos",
        "sektor" => "E-commerce dan layanan cloud",
        "gambar" => "amazon.png"),
    array("nama" => "Facebook, Inc.",
        "lokasi" => "Menlo Park, California, AS",
        "penemu" => "Mark Zuckerberg, Andrew McCollum,",
        "sektor" => "Media sosial dan teknologi",
        "gambar" => "facebook.png"),
    array("nama" => "Intel Corporation",
        "lokasi" => "Santa Clara, California, AS",
        "penemu" => "Robert Noyce, Gordon Moore, Andy Grove",
        "sektor" => "Manufaktur mikroprosesor",
        "gambar" => "intel.png"),
    array("nama" => "Tesla, Inc.",
        "lokasi" => "Palo Alto, California, AS",
        "penemu" => "Elon Musk",
        "sektor" => "Otomotif listrik dan energi terbarukan",
        "gambar" => "tesla.png"),
    array("nama" => "IBM (International Business Machines Corporation)",
        "lokasi" => "Armonk, New York, AS",
        "penemu" => "Charles Ranlett Flint",
        "sektor" => "Teknologi informasi dan perangkat keras",
        "gambar" => "ibm.png"),
);

// buat tabel
echo "<table class='garis-hitam'>";

// buat header
echo "<tr>";
foreach($Assosiative_array[0] as $nama_kolom => $nilai) {
    echo "<th>".$nama_kolom."</th>";
}
echo "</tr>";

// buat data tabel
foreach($Assosiative_array as $baris) {
    echo "<tr>";
    foreach($baris as $nilai) {
        echo "<td>".$nilai."</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>