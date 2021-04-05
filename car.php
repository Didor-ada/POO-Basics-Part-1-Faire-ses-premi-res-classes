<?php

//car.php

class Car
{
    private int $nbWheels = 4;

    private int $currentSpeed = 50;

    private string $color;

    private int $nbSeats = 4;

    private string $energy;

    private string $energyLevel;



    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start(): string
    {
        $this->CurrentSpeed = 0;

        return "Go !";
    }

    public function forward(): string
    {
        $this->CurrentSpeed = 50;

        return "vroom vroom !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) { //$this représente l'object en lui-même
            $this->currentSpeed--;
            $sentence .= "Break stp !";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
}