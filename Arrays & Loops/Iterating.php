<?php
for($currentNumber = 1;
    $currentNumber < 100;
    $currentNumber = $currentNumber*2) {

    $currentNumber = $currentNumber + 1;
    echo "The number now is ${currentNumber} <br/>";
}
$thisHereIsTrue = mt_rand(0,100); //In some cases this goes on forever, why? :D
while($thisHereIsTrue < 50) {
    echo "The variable $thisHereIsTrue is < 50";
}