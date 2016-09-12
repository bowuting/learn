<?php

  class Human{
    public $age = 22;
    public function __clone(){
      echo "竟然可以科隆我";
    }

  }

    $lisi = new Human();
    $zhangsan  = clone $lisi;



 ?>
