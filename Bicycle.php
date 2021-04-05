<?php

// Bicycle.php

class Bicycle
{
    private string $color;
    private int $currentSpeed = 3; // ici on donne des propriétés (ou attributs), auxquelles vont correspondre des valeurs
    private int $nbSeats = 1;
    private int $nbWheels = 2;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function forward(): string
    {
        $this->CurrentSpeed = 15;

        return "Go !";
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

    public function dump()
    {
        var_dump($this);
    }
    // $this :
    // get = obtenir
    // set = mettre en place, définir
    public function getColor(): string
    {
        return $this->color;
    }


    public function setCurrentSpeed(int $currentSpeed): int
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
        return $this->currentSpeed = $currentSpeed;
    }
}
