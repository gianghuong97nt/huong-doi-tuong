<?php
//khoong khai bao static
//class ConNguoi{
//    private $name = 'amonymouse';
//
//    public function setName($name){
//        $this->name = $name;
//    }
//
//    public function getName(){
//        return $this->name;
//    }
//
//
//}
class ConNguoi{
    private static $name = 'amonymouse';

    public function setName($name){
        self::$name = $name;
    }

    public function getName(){
        return self::$name;
    }


}

$chuBlog = new ConNguoi();
$chuBlog->setName('Vu Thanh Ha');
echo $chuBlog->getName();
$nguoixem = new ConNguoi();
echo $nguoixem->getName();

