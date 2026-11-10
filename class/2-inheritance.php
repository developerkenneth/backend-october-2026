<?php

class Manufacturer
{


    // access level
    public $companyName;
    protected $companyAddress;
    private $ceo;


    // constructor
    public function __construct($companyName, $companyAddress)
    {
        $this->companyAddress = $companyAddress;
        $this->companyName = $companyName;
    }

    private function setCeo($newCeo)
    {
        $this->ceo = $newCeo;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }


    public function getAddress()
    {
        return $this->companyAddress;
    }


    // destructor : run you are done with the object

    public function __destruct()
    {
        echo "<br> bye bye!";
    }
}



// inheritance
// create a new class

class Product extends Manufacturer
{

    // run code here
    public $productName;
    public function __construct($productName, $companyAddress, $companyName)
    {
        $this->productName = $productName;
        parent::__construct($companyName, $companyAddress);
    }


    public function setCompanyAddressFromProduct($companyAddress)
    {
        $this->companyAddress = $companyAddress;
    }
}


$newProduct = new Product("car", "ujdjdjd", "lowkey industries");

$newProduct->setCompanyAddressFromProduct("biggies shop");

echo $newProduct->getAddress() . "<br>";
echo $newProduct->getCompanyName() . "<br>";
echo $newProduct->companyName . "<br>";
