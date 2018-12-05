<?php

trait SetGetName{
    private $name;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function getAll(){
        return $this->getName();
    }
}

trait SetGetAge{
    private $age;

    public function setAge($age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }

    public function getAll(){
        return $this->getAge();
    }
}

class ConNguoi{
    private $name;
    private $age;

    use SetGetName;

    use SetGetAge;

    public function getAll()
    {
        return $this->getName();
    }
}