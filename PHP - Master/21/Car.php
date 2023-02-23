<?php

use Car as GlobalCar;

class Car
{
    /* properties */
    protected $car = 'Limousine';
    protected $color = 'Red';
    protected $car_list = ['Limousine', 'Van', 'Sports'];
    protected $engine_type = 2000;

    const LIMOUSINE_ENGINE = 2000;
    const VAN_ENGINE = 2500;
    const SPORTS_ENGINE = 3000;

    public function __construct($car = 'Limousine', $color = 'Red')
    {

        $this->set_color($color);

        switch ($car) {
            case $this->car_list[0]:
                $this->set_car($car);
                $this->set_engine_type(self::LIMOUSINE_ENGINE);
                break;

            case $this->car_list[1]:
                $this->set_car($car);
                $this->set_engine_type(self::VAN_ENGINE);
                break;

            case $this->car_list[2]:
                $this->set_car($car);
                $this->set_engine_type(self::SPORTS_ENGINE);
                break;

            default:
                $this->car = null;
                $this->color = null;
                $this->engine_type = null;
                break;
        }
    }

    public function get_car()
    {
        return $this->car;
    }
    public function get_color()
    {
        return $this->color;
    }
    public function get_engine_type()
    {
        return $this->car;
    }

    protected function set_car($car)
    {
        $this->car = $car;
    }
    protected function set_color($color)
    {
        $this->color = $color;
    }
    protected function set_engine_type($type)
    {
        $this->engine_type = $type;
    }
    public function manifacturing()
    {
        if ($this->car != null || $this->color != null || $this->engine_type != null) {
            return "Your Request Car is $this->car , It's Color is: $this->color and The engine is: $this->engine_type CC";
        } else {
            return  "Your Request is unavailable";
        }
    }
}

$req1 = new Car('Sports', 'Blue');
$req2 = new Car('Van');
//echo $req1->get_car() . PHP_EOL;
//echo $req1->get_color() . PHP_EOL;
echo $req1->manifacturing();
echo PHP_EOL;
echo PHP_EOL;
echo $req2->manifacturing();
//echo $req2->get_car() . PHP_EOL;
//echo $req2->get_color() . PHP_EOL;