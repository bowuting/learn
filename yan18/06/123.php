<?php

class Human
{
  static public $head = 1;
  public function changeHead(){
    Human::$head = 99;
  }
  public function getHead(){
    return Human::$head;
  }
}


echo  Human::$head,'<br />';

$m1 = new Human();
$m2 = new Human();
$m3 = new Human();

$m1->changeHead();
echo $m2->getHead();   //打印99   所有的对象都公用一个head;

?>
