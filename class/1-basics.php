<?php
class HouseBluePrint
{
    // properties : datas
    public $color = "white";

    // method: to perform actions in a class create a method
    public function getColor()
    {
        echo $this->color;
    }


    public function setColor($color)
    {
        $this->color = $color;
    }
}





// instatiate object from class
$clientOne = new HouseBluePrint();
$clientTwo = new HouseBluePrint();


$clientOne->setColor('Brown');
$clientOne->getColor();
