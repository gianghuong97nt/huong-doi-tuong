<?php

class ConNguoi{
     public function getClass(){
         return 'Day la con nguoi';
     }

     public function echoClass(){
//         return $this->getClass();
         return self::getClass();
     }
}


class NguoiLon extends ConNguoi{
    public function getClass(){
        return 'Day la Class Nguoi Lon';
    }
}


$nguoilon = new NguoiLon();
echo $nguoilon->echoClass();
