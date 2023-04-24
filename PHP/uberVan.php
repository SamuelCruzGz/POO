<?php
    require_once('Car.php');
    class UberVanw extends Car{
        public $typeCarAccepted;
        public $seatsMaterial;
        public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial){
            parent::__construct($license, $driver);
            $this->typeCarAccepted = $typeCarAccepted;
            $this->seatsMaterial = $seatsMaterial;            
        }
    }