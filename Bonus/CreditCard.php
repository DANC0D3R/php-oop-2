<?php
class CreditCard{

    private $number;
    private $expiration;
    private $cvc;

    public function __construct(int $number, $expiration, int $cvc){
        $this->number = $number;
        $this->expiration = $expiration;
        $this->cvc = $cvc;
        
        // Verifia scadenza carta
        $today = new DateTime();
        if ($today > $this->expiration){
            throw new Exception("La carta di credito che hai inserito è scaduta");       
        }
    }

    public function getNumber(){
        return $this->number;
    }

    public function getDataExpiration(){
        return $this->expiration;
    }

    public function getDataCvc(){
        return $this->cvc;
    }
}
?>