<?php

function __autoload($class){

    if (file_exists($class.'.php')){
        include_once $class.'.php';
    }
}

$connguoi = new NguoiLon();
$trecon = new TreCon();