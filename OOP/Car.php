<?php

class Car
{
    public $color;
    public $wight;
    private $year;
    pricate $availableColors = ['red', 'green', 'blue'];

    const MANUFACTURER_BMW = 'bmw';
    const MANUFACTURER_TESLA = 'tesla';
    const MANUFACTURER_VOLVO = 'volvo';
}

public function getYear()
{
    return $this->year;
}

public function setYear()
{
    $this->year = $year;
}

public function getColor()
{
    return $this->color;
}

public function setColor()
{
    if (in_array($color, $this->availableColors)) {
        $this->color = $color;
    }
}

$myCar = new Car();