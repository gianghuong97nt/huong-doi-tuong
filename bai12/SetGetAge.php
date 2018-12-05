<?php

namespace SetGetAge;
trait SetGetAge{
    private $name;

    public function setAge($name){
        $this->name = $name;
    }

    public function getAge(){
        return $this->name;
    }
}