<?php

class Human{
  public function say($name){
    echo $name,"吃了吗？！<br />";
  }
}
class Stu extends Human{
  public function say(){     //覆盖或者叫重写
    echo "nice <br />";
  }
}


$st = new Stu();
$st->say();
$st->say('zhang');

class Clac{
  public function area(){
    $args = func_get_args();
    if(count($args) == 0){
      return '???';
    }elseif (count($args) == 1) {
       return '一个参数';
    }
  }
}

$cl = new Clac();
echo $cl->area(1);




?>
