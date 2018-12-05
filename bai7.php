<?php
abstract class DongVat{
    protected $name;

    abstract protected function getName();
}

// class Đúng vì chưa định nghĩa lại phuiwng thức astract getName
class ConTrau extends DongVat{
    public function getName()
    {
        // TODO: Implement getName() method.
    }
}
