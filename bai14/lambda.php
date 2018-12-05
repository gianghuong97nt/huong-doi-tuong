<?php

// gắn biến

$lambda = function (){
    return 'Hoc lap trinh';
};

echo $lambda();



// sử dụng hàm ẩn danh như môt tham số trong hàm
function getRole($role){
    return $role();
}

echo getRole(function (){
   return 'Hoc lap trinh';
});


// sử dụng như một tham số trong class, phương thức

class Role{
    public $role;

    public function __construct($role)
    {
        $this->role= $role;

    }

    function getRow($role){
        return $role();
    }
}

$role = new Role(function (){
    return 'Hoc lap trinh';
});

$data = $role->role;

echo $data();

echo $role->getRow(function (){
    return 'hoc lap trinh';
});