<?php

class Hinh {
    protected function tinhDienTich(){

    }

}

class HinhVuong extends Hinh {
    private $canh;

    public function setCanh($canh){
        $this->canh = $canh;
    }

    public function getCanh(){
        return $this->canh;
    }

    public function tinhDienTich()
    {
       return pow($this->canh, 4);
    }


}

class HinhTron extends Hinh{
    private $banKinh;

    public function setBanKinh($banKinh){
        $this->banKinh = $banKinh;
    }

    public function getBanKinh(){
        return $this->banKinh;
    }

    public function tinhDienTich()
    {
      return (pow($this->banKinh,2)*pi());
    }
}

$hinhvuong = new HinhVuong();
$hinhvuong->setCanh(4);

echo $hinhvuong->tinhDienTich();

$hinhtron = new HinhTron();
$hinhtron->setBanKinh(4);
echo $hinhtron->tinhDienTich();