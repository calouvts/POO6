<?php

require_once 'HighWay.php';

class PedestrianWay extends HighWay
{

    public function getNbLane(): int
    {
        return 1;
    }

    public function getMaxSpeed(): int
    {
        return 10;
    }


    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            $this->currentVehicles[] = $vehicle;
            return $this->currentVehicles;
        } else {
            return 'uniquement les vélos';
        }

    }
}
