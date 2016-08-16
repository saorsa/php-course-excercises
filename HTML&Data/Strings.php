<?php
$name = "Andrey";
//Concatenating by using .
echo "Hello, ".$name."<br/>";
/*
 * Interpolation - when using strings defined with
 * double quotes - you can add your variables inside
 * by using ${variableName}
*/
echo "Hello, ${name} <br/> Nice to see you, ${name}";
//Getting the length of a string
echo "Name length is: " . strlen($name);
//Saying there is a user input
$password = "123456 ";
echo "<br/>Trimmed password is: '"
    .trim($password)
    ."'"
    ." Not trimmed: '"
    .$password
    ."'";
$truePassword = "123456";
//Using == to compare strings
if($password == $truePassword){
    echo "The user has entered the true password.";
}
//checking comparison
echo "<br/>".strcasecmp("abc","acb");
if("acb" > "abc") {
    echo "<br/>acb is bigger than abc";
}