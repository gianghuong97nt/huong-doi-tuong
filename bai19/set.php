<?php

class ConNguoi{
    private $name;
    public function __set($key, $value)
    {
        // kieemr tra thuoc tinh co ton tia hay k
        if(property_exists($this, $key)){
            $this->$key = $value;
        }else{
            die('khong ton tai');
        }
    }

    public function getName(){
        echo $this->name;
    }
}

$connguoi = new ConNguoi();
$connguoi->name = 'Vu Thanh ha';
$connguoi->getName();

$connguoi->age=20;