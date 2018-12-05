<?php

class ConNguoi{
    private $name = 'Vu Thanh ha';

    private $age = 20;

    public function __sleep()
    {
        return array('name');
    }

    public function getName(){
        echo $this->name;
    }

    public function __wakeup()
    {
        $this->getName();
    }

}

unserialize(serialize(new ConNguoi()));