<?php

class Car
{
private int  $nbWheels;
private int $currentSpeed;
private string $color;
private int $nbSeats;
private string $energy;
private int $energyLevel;

public function __construct (string $color, int $nbSeats, string $energy)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
}

public function forward()
{
    $this->currentSpeed = "15";

    return "vroom !";
}

public function brake()
{
    $up = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $up .= "Brake !!!";
    }
    $up .= "I'm stopped !";
    return $up;
}

public function start()
{
    {
        return "vroom !";
    }

}

public function getNbWheels()
{
    return $this->nbWheels;
}


    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }


    public function getColor() : string
    {
        return $this->color;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }
}