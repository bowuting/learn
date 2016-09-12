<?php

class Human{
  public $mood = ' ';
  private $money = 1000;
  public function getMoney(){
    return $this->money;
  }
  public function  __construct($mood,$money){
     $this->mood = $mood;
     $this->money = $money;
  }
}
$hu = new Human('nice',1200);

echo $hu->mood,'<br />';
echo $hu->getMoney();

 ?>
