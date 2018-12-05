<?php

class ConNguoi{
    private $name = 'Vu Thanh ha';

    private $age = 20;

    public function __sleep()
    {
        // TODO: Implement __sleep() method.
        return array('name');
    }

}

echo serialize(new ConNguoi());