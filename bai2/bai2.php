<?php
class ConNguoi{

    // thuộc tính động
    public $name;
    public $mat;
    public $mui;

    //Khai báo constant
    const SoChan = 2;

    // Khai bao phuong thuc

    public function an(){

    }

    public function noi($caunoi){
        //goi phương thức trong class
        return $this->getSoChan();
    }

    public function di(){

    }

    public function getName(){
        //gọi thuộc tinh động trong class
        return $this->name;
    }

    public function getSoChan(){
        //gọi thuộc tính tĩnh trong class
        return self::SoChan;
    }

}

// khởi tạo class
$connguoi = new ConNguoi();
//gọi thuộc tính ngoài class và đồng thời gán giá trị mới cho thuộc tính
$connguoi->name ='Vu Thanh Ha';
//gọi lại thuộc tính để xem thay đổi
echo $connguoi->name;
//gọi phương thức
echo $connguoi->noi('Vu thanh Ha');