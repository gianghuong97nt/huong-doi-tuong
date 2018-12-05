<?php
class ConNguoi{
    private $name = 'Vu Thanh ha';
    private $age = 30;

    public function  __invoke()
    {
        // TODO: Implement __toString() method.
        echo 'Phuong thuc __invoke() duoc goi';
    }
}

$connguoi = new ConNguoi();
$connguoi();