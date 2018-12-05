<?php
include 'SetGetAge.php';
include 'SetGetName.php';

use SetGetAge\SetGetAge;
use SetGetName\SetGetName;

class ConNguoi{
    private $name;
    private $age;

    use SetGetName;

    use SetGetAge;
}

$conguoi = new ConNguoi();
$conguoi->setName('Vu Thanh Ha');
echo $conguoi->getName();

echo '</br>';

$conguoi->setAge(22);
echo $conguoi->getAge();
