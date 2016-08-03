<?php
function tellMeSomething() {
    $name = 'Your Name';
    print "My name is $name";
}

tellMeSomething();


function tellMeSomethingGlobal() {
    $name = 'Your Name';
    print "My name is {$GLOBALS['myName']}";
}
$GLOBALS['myName'] = "Andrey";
tellMeSomethingGlobal();