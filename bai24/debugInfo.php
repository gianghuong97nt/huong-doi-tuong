<?php
class ConNguoi{
    public $name = 'Vu Thanh ha';
    public $age = 30;

    public  function  __debugInfo()
    {
        return[
            'name' =>$this->name,
        ];
    }
}

$connguoi = new ConNguoi();
var_dump($connguoi);
