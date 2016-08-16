<?php

/**
 * Created by PhpStorm.
 * User: Andrey Dautev
 * Date: 8/3/2016
 * Time: 6:43 PM
 */
class Monitor {
    //Public property
    public $diagonalLength;
    //Private property
    private $units = "inches";
    //Function
    public function tellDiagonalLength() {
        print "Length is {$this->diagonalLength} {$this->units}";
    }
    //Static Function
    public static function convertInchesToCm($inches) {
        return $inches * 2.54;
    }
}
$monitor = new Monitor();
$monitor->diagonalLength = 34;
$monitor->tellDiagonalLength();

print "<br/>2 cm to inches are ".Monitor::convertInchesToCm(2) . " cm";
print '<br/>----------------------------<br/>';
class MonitorWithConstructor {
    //Public property
    public $diagonalLength;
    //Private property
    private $units = "inches";
    //Function
    public function tellDiagonalLength() {
        print "Length is {$this->diagonalLength} {$this->units}";
    }
    public function __construct($diagonalLength, $units) {
        $this->diagonalLength = $diagonalLength;
        $this->units = $units;
    }
}
$monitor = new MonitorWithConstructor(20,'cm');
$monitor->tellDiagonalLength();