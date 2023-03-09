<?php

class Product{
    public $name;
    public $brand;
    public $category;
    public $price;
    public $image;
    public $is_available = true;
    protected $barcode;

    public function __construct($_name, $_brand, Category $_category, $_price, $_is_available){
        $this->name = $_name;
        $this->brand = $_brand;
        $this->category = $_category;
        $this->price = $_price;
        $this->is_available = $_is_available;
    }

    public function setBarcode(){
        $valuesArray = [0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','w','s','t','u','v','w','x','y','z'];
        $code = str_shuffle(implode(array_rand(array_flip($valuesArray), 15)));
        $this->barcode = $code;
    }

    public function getBarcode(){
        return $this->barcode;
    }

    // Trait
    use productBarcode;

    public function setImage($_image){
        $this->image = $_image;
    }

    public function getImage(){
        $placeholder = 'https://i.pinimg.com/736x/e7/60/97/e760979c45e5b87a37117aad1b7b71ef.jpg';
        if ($this->image) {
        return $this->image;
        }
        else $this->image = $placeholder;
    }
}