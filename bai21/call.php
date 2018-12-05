<?php

class ConNguoi{
    private $name = 'Vu Thanh ha';

    private $age = 30;

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo 'Ban vua goi phuong thuc :'.$name.' va co tham so'.implode('-', $arguments);
    }

    private function getInfo(){
        echo $this->name.'+'.$this->age;
    }
}

$connguoi = new ConNguoi();
$connguoi->getInfo('name', 'age');
