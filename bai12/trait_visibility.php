<?php
trait Name {
    private $name = 'Vu Thanh Ha';

    private function getName(){
        return $this->name;
    }
}

class ConNguoi{
    use Name{
        getName as public;
        // dinh danh moi
//        getName as doName;
    }
}

$connguoi = new ConNguoi();
 echo $connguoi->getName();