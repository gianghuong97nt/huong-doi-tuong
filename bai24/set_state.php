<?php
class ConNguoi{
    private $name = 'Vu Thanh ha';
    private $age = 30;

    public static function  __set_state(array $arr)
    {
        foreach ($arr as $key=>$value){
            echo $key.'->'.$value.'<br>';
        }

    }
}

$connguoi = new ConNguoi();
eval(var_export($connguoi,true).';');
