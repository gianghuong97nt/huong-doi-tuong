<?php

class ConNguoi {
    private static $name = 'ConNguoi';

    public function __construct()
    {
    }

    public function getname(){
        echo static::$name;
    }
}