<?php
    require_once('Car.php');
    require_once('uberX.php');
    require_once('Account.php');

    $uberX = new UberX("QWE098", new Account("Sebastian Gonzalez", "SEG765"),"Ford", "Mustang");
    $uberX->PrintDataCar();
    
    $car = new Car("ABC123", new Account("Samuel Cruz","SCZ123"));
    $car->PrintDataCar();