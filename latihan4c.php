<?php

echo "<b>Daftar Negara ASEAN dan Ibukota :</b>";
$associative_array = array(
    "Indonesia" => "D.K.I Jakarta",
    "Singapore" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyitaw",
);

echo "<ul>";
foreach ($associative_array as $key => $value) {
    echo "<li>" . $key . " : " . $value . "</li>";
}
echo "</ul>";

?>