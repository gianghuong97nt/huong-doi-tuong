<?php

class ConNguoi{
    private $name = 'Vu Thanh ha';

    private $age = 30;

    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo 'Ban vua goi phuong thuc :'.$name.' va co tham so'.implode('-', $arguments);
    }

    private static function getInfo(){
        echo self::name.'+'.self::age;
    }
}

ConNguoi::getInfo();
ConNguoi::getInfo('name', 'age');


