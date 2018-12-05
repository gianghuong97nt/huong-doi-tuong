<?php
// phương thưc hủy va fkhoir tạo trong kế thừa

class Bar {
    public function __construct()
    {
        echo 'Class Bar đã được tạo';
    }

    public function __destruct()
    {
        echo 'Class Bar đã được hủy';
    }

}

class Foo extends Bar{
    public function __construct()
    {
        parent::__construct();
        echo 'Class foo được khởi tạo';
    }

    public function __destruct()
    {
        parent::__destruct();
        echo 'Class Foo đã được hủy';
    }
}

$foo = new Foo();