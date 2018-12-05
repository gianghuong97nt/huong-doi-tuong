<?php

class ConNguoi{
    private $name = "Vu rhanh ha";

    public function __get($key)
    {
        // kieemr tra thuoc tinh co ton tia hay k
        if(property_exists($this, $key)){
            return $this->$key;
        }else{
            die('khong ton tai');
        }
    }

    public function getName(){
        echo $this->name;
    }
}

$connguoi = new ConNguoi();
$connguoi->name ;
$connguoi->getName();

$connguoi->age;