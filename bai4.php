<?php

class Person{
    //Khai báo thuộc tính name private
    private $name;

    private function run(){
        return 'Đây là hầm run';
    }

    function setName($name){
        $this->name;
    }

    function getName(){
        return$this->name;
    }

    function getRunMethod(){
        return $this->run();
    }


}

// Khởi tạo class

$person = new Person();
// set thuoocj tính name
$person->setName('Vu Thanh Ha');
// lấy ra thuộc tính name
echo $person->getName();
echo $person->getName();
echo $person->getRunMethod();