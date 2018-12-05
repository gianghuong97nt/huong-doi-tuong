<?php

class ConNguoi{
    private static $name;

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
        echo 'Ban vua kiem tra thuoc tinh'.$name;
    }
}

$connguoi= new ConNguoi();

isset($connguoi->name);

empty($connguoi->name);

isset($connguoi->age);