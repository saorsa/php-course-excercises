<?php
$searchForKey = "shop3";
$keyFound = false;
$shops = ["shop1" => "Sofia", "shop2" => "Bansko"];
foreach ($shops as $myKey) {
    if($myKey == $searchForKey) {
        $keyFound = true;
    }
}
function arrayKeyExist($array, $searchForKey) {
    foreach ($array as $myKey) {
        if($myKey == $searchForKey) {
            return true;
        }
    }
    return false;
}

function SayHelloTo($person) {
    echo "Hello, $person <br/>";
}

SayHelloTo('Pesho!');

function CalculateTax($days, $feePerDay) {
    return $days * $feePerDay;
}






