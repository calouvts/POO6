<?php

require_once 'HighWay.php';

class ResidentialWay extends HighWay
{
    public function getNbLane(): int
    {
        return 2;
    }

    public function getMaxSpeed(): int
    {
        return 50;
    }

    public function addVehicle (Vehicle $vehicle) : void
    {
        $this->currentVehicles[] = $vehicle;
    }




}