<?php
class Monitor {
    private $volts;
    private $amps;
    public function CalculatePower() {
        return $this->amps*$this->volts;
    }
    function __construct($v,$a)
    {
        $this->volts = $v;
        $this->amps = $a;
    }
}

class MonitorWithBattery extends Monitor {

}
$myMonitor = new MonitorWithBattery(10,11);