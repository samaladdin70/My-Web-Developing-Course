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
        $this->set_car($car);
        $this->set_color($color);
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
}

$req1 = new Car('Fiat', 'White');
$req2 = new Car();
echo $req1->get_car() . PHP_EOL;
echo $req1->get_color() . PHP_EOL;
echo PHP_EOL;
echo $req2->get_car() . PHP_EOL;
echo $req2->get_color() . PHP_EOL;
