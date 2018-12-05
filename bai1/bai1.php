<?php

function getPersonal(){
    $name = "Vu Van A";
    $age = 32;
    return $name."----".$age;
}

class bai1{
    private $name = "Vu Van A";
    private $age = 32;

    function getPersonal(){
        return $this->name."----".$this->age;
    }

}

