<?php


require_once 'HighWay.php';

class Motorway extends HighWay
{

    public function getNbLane(): int
    {
        return 4;
    }

    public function getMaxSpeed(): int
    {
        return 130;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            $this->currentVehicles[] = $vehicle;
            return $this -> currentVehicles;
        } else {
            return 'véhicules à moteur uniquement';
        }

    }
}