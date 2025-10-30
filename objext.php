<?php

$auto = (object) [
    "marka" => "Toyota",
    "modelis" => "Corolla",
    "gads" => 2012
];


echo "Marka: " . $auto->marka. ", " ;

$tagadejaisGads = date("Y");
$vecums = $tagadejaisGads - $auto->gads;

if ($vecums > 10) {
    echo "Auto ir vecāks par 10 gadiem";
} else {
    echo "Auto nav vecāks par 10 gadiem";
}
?>
