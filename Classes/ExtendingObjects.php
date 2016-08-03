<?php

/**
 * Created by PhpStorm.
 * User: Andrey Dautev
 * Date: 8/3/2016
 * Time: 7:17 PM
 */
class ElectricalAppliance
{
    public $voltage = 0;
    public function __construct($voltage)
    {
        $this->voltage = $voltage;
    }

}
class Fax extends  ElectricalAppliance {
    public function __construct($voltage)
    {
        parent::__construct($voltage);
    }
    public function printMonitorData() {
        print "This is a fax with {$this->voltage} volts voltage";
    }
}
$fax = new Fax(120);
$fax->printMonitorData();
