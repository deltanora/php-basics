<?php

$biedri = [
    ["vards" => "Anna", "uzvards" => "Kalniņa", "loma" => "leader", "stundas" => 25],
    ["vards" => "Jānis", "uzvards" => "Ozols", "loma" => "leader", "stundas" => 18],
    ["vards" => "Laura", "uzvards" => "Bērziņa", "loma" => "member", "stundas" => 22],
    ["vards"=> "Mārtiņš", "uzvards" => "Liepa", "loma" => "member", "stundas" => 15],
    ["vards" => "Elīna", "uzvards" => "Kļava", "loma" => "member", "stundas" => 28],
    ["vards"=> "Roberts", "uzvards" => "Zariņš", "loma" => "member", "stundas" => 10],
    ["vards" => "Inga", "uzvards" => "Eglīte", "loma" => "member", "stundas" => 20]
];

echo "Vadītāji:";

//print_r ($biedri[$i]["loma"]);

    if ($biedri["loma"] === "leader") {
        echo $biedri["vards"] . " " . $biedri["uzvards"]. "  ";
    }

   //for ($i = 0; < count($biedri); i++)
   // {
    //print_r ($biedri[$i]["vards"]);
   //}


?>