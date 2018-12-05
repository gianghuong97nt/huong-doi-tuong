<?php

class ConNguoi{
    public static function getStatic(){
        return 'Day la phuong thuc getStatic';
    }

    public function echoStatic(){
        echo $this->getStatic();
    }

}

$connguoi = new ConNguoi();
$connguoi->echoStatic();

/**
 * This cos the goi phuong thuc tinh
 * Khong goij thuco tinhx tinh bawng $this
 */