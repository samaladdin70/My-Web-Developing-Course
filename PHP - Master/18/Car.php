<?php

class Car
{
    /* properties */
    protected $car;
    protected $color;
    protected $car_list = ['Limousine', 'Van', 'Sports'];
    protected $engine_type;

    const LIMOUSINE_ENGINE = 2000;
    const VAN_ENGINE = 2500;
    const SPORTS_ENGINE = 3000;

    public function __construct()
    {
        //
    }
}
