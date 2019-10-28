<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle
{

    public function authorizationLane()
    {
        $highWayBicycle = 1;
        return $highWayBicycle;
    }

    public function forward()
    {
        return $this->currentSpeed = 7;
        return "Go !";
    }
}
