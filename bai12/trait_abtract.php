<?php

trait Name{
    private $name = 'Vu Thanh Ha';

    abstract public function getName();
}

class ConNguoi{
    use Name;

    public function getName()
    {
        return $this->name;
    }
}

$connguoi = new ConNguoi();
echo $connguoi->getName();