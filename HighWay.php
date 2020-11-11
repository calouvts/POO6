<?php
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

//*    Créer une classe abstraite HighWay possédant les propriétés suivantes :
//        currentVehicles (array),
//        nbLane (int) et
//        maxSpeed (int),
//    Créer les getters et setters correspondants au propriétés ci-dessus,
//    Faire hériter les classes finales
//        MotorWay (4 voies, 130km/h),
//        PedestrianWay (1 voie, 10km/h)et
//        ResidentialWay (2 voies, 50km/h).
//    Ajouter à la classe HighWay une méthode abstraite addVehicle() prenant en paramètre un objet de type Vehicle.
//    implémenter la méthode pour qu’elle ajoute le véhicule au tableau $currentVehicles, uniquement si ce dernier est autorisé sur ce type de voie. Ainsi, pour MotorWay, addVehicle($car) ajoutera bien une voiture au tableau, tandis que addVehicle($bike) ne le fera pas, car il n’est pas possible de rouler en vélo sur une autoroute. Les règles attendues sont les suivantes:
//        motorway : tout type de voiture
//        ResidentialWay : tout type de véhicule
//        PedestrianWay : Bike et Skateboard uniquement*//
abstract class HighWay


{

    protected $currentVehicles = [];
    protected int $nbLane;
    protected int $maxSpeed;

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {

            $this->currentVehicles = $currentVehicles;

    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {

        $this->nbLane = $nbLane;

    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {

        $this->maxSpeed = $maxSpeed;

    }
    abstract public function addVehicle (Vehicle $vehicle) ;

}