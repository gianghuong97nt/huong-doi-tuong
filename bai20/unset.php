<?php

class ConNguoi{
    private static $name;

    public function __unset($name)
    {
        // TODO: Implement __isset() method.
        echo 'Ban vua huy thuoc tinh'.$name;
    }
}

$connguoi= new ConNguoi();

unset($connguoi->name);
unset($connguoi->age);