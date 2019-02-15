<?php 
namespace App;

class Product
{
    public $name;
    public $price;

    function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function print(){
        echo "Name: $this->name";
    }

    public function getRealPrice()
    {
        return $this->price * 1.21;
    }
}