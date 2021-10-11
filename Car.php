<?php 

class Car 
{
    private int $nbWheels = 4;
    private int $currentSpeed ; 
    private string $color ; 
    private int $nbSeat ;
    private string $energy ;
    private int $energyLevel; 



    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
    
        return "Go !";
    }


    public function brake(): string
    {
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }

    public function start(): string
    {
        $this->currentSpeed = 1;
    
        return "Let's go !";
    } 


    public function getCurrentSpeed(): int
    {
    return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->getEnergy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}