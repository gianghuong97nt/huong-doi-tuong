<?php
class ConNguoi{
    public $name = 'Vu Thanh ha';
    public $age = 30;

    public  function  __clone()
    {
       echo 'Phuong thuc __clone() duoc goi';
    }
}

$connguoi = new ConNguoi();
$connguoi2 = clone $connguoi;
echo $connguoi2->name;
