<?php

$number = 1;

$getNextNumber = function () use (&$number){
    return ++ $number;
};

$getPreNumber = function () use (&$number){
    return --$number;
};

echo $getNextNumber();

echo $number;

echo $getPreNumber();