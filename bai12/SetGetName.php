<?php

namespace SetGetName;
trait SetGetName{
    private $name;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}