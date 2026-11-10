<?php

abstract class Person
{
    public $name;
    public $age;
    public $address;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}


class Jide extends Person {}



// wrong will produce an error
// $newPerson = new Person();


$newJide = new Jide();

$newJide->setName("Jide Kosokor");
echo $newJide->getName();
