<?php
trait productBarcode{

    public function setBarcode(){
        $valuesArray = [0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','w','s','t','u','v','w','x','y','z'];
        $code = str_shuffle(implode(array_rand(array_flip($valuesArray), 15)));
        $this->barcode = $code;
    }

    public function getBarcode(){
        return $this->barcode;
    }
}