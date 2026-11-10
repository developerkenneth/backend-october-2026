<?php


// static key word
class Car
{

    static $name;

    public $carName;

    public static function start()
    {
        return "car has started running";
    }

    public static function set()
    {
        self::$name = "orange";
    }

    public function setName($newcarName)
    {

        $this->carName = $newcarName;
    }
}


$object = new Car();

Car::start();
