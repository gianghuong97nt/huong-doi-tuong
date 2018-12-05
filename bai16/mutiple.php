<?php
class ConNguoi{
    private $name;

    public function setName($name = 'ConNguoi'){
        $this->name = $name;
        return $this;
    }

    public function getName(){
        return $this->name;
    }
}

$conNguoi = new ConNguoi();
echo $conNguoi->setName('Vu Thanh Ha')->setName('Giang')->getName();
