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

    public function __construct()
    {
        //
    }

    public function get_car()
    {
        return $this->car;
    }
    public function get_color()
    {
        return $this->car;
    }
    public function get_engine_type()
    {
        return $this->car;
    }

    public function set_car($car)
    {
        $this->car = $car;
    }
}

$req1 = new Car();
$req2 = new Car();
echo $req1->get_car() . PHP_EOL;
$req1->set_car('plapla');
echo $req1->get_car() . PHP_EOL;
echo $req2->get_car() . PHP_EOL;