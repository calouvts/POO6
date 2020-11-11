<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{


    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var int
     */
    private $storageCapacity;

    /**
     * @var int
     */
    private $cargo;


    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storagecapacity = $storageCapacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {

        $this->energy = $energy;


    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getcargo(): string
    {
        return $this->cargo;
    }


    public function checkcargo(): string
    {
        if ($this->storageCapacity === $this->cargo) {
            return 'Full';
        } else {
            return 'In filling';
        }
    }
}