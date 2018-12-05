<?php
class ConNguoi{
    private $name = 'Vu Thanh ha';
    private $age = 30;

    public function  __toString()
    {
        // TODO: Implement __toString() method.
        return 'Phuong thuc __toString() duoc goi';
    }
}

echo new ConNguoi();