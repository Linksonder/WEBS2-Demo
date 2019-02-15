<?php 

class Product
{
    public $name;
    public $price;

    function __construct($name){
        $this->name = $name;
    }

    public function print(){
        echo "Name: $this->name";
    }
}