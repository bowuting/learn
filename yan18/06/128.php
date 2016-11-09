<?php

class Human{
  public function hello(){
    echo "hello<br />";
  }
  private function t(){

  }
  public function __call($method,$arguments){
    echo "有对象想调用",$method,"方法,但是没有<br />";
    echo "还传了参数";
    print_r($arguments);
    echo "<br />";
    //$this->hello();
  }
  public function __callStatic($method,$arguments){
    echo "有对象想调用了静态",$method,"方法,但是没有<br />";
    echo "还传了参数";
    print_r($arguments);
    echo "static<br />";
  }

}

$hu = new Human();

$hu->say();   //say方法  不存在
$hu->t(1,24); //t方法权限不够

Human::smile();


 ?>
