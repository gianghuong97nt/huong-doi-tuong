<?php

include 'Class.php';

$conNguoi = new Connguoi\ConNguoi\ConNguoi();
echo $conNguoi->getName();

$nguoilon = new \Nguoilon\NguoiLon\NguoiLon();
echo $nguoilon->getName();