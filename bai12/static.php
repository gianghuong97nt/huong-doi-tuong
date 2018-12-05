<?php

trait Name{
    private static $name = 'Chua xet';

    public function setName($name){
        self::$name->$name;
    }

    public function getName(){
        return self::$name;
    }

}

class ConNguoi{
    use Name;
}

$conguoi = new ConNguoi();

$conguoi->setName('Vu thanh Ha');
echo $conguoi->getName();

