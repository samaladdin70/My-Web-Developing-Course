<?php

class MyClassObject
{
    // properties
    // in case of variables
    /* public protected private */
    protected $any;
    const ANY_CONST = 2023;

    // methods

    public function get_any()
    {
        /* Pseudo class name ($this or self) */
        return $this->any . " " . self::ANY_CONST;
    }

    public function set_any(string $ddddd)
    {
        $this->any = $ddddd;
    }

    public static function my_static()
    {
        return "I'm a static function";
    }
}
/* inside class Pseudo class name ($this or self) */
// $this for varibles and ordinary methods
// self for constants and static methods
/* $anyname = new MyClassObject();
$anyname->set_any('Hello');
echo $anyname->get_any() . PHP_EOL;
echo $anyname->my_static() . PHP_EOL; */
// echo $anyname::ANY_CONST;
echo MyClassObject::my_static();
