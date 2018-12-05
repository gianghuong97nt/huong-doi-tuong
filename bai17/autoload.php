<?php

function __autoload($class){
    echo 'ban vua khoi tao class '.$class;
}

$connguoi = new ConNguoi();