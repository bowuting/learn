<?php

header('Content-type:text/html;charset=utf-8');

class Human
{

  private $height = 160;
  public function cry(){
    echo '55555<br />';
  }
}
class Stu{
  private $height = 170;
  public $snu = '0032';
  public function cry()
  {
    echo '59……59<br />';
  }
  public function study(){
    echo 'good study<br />';
  }
}


class Lawer{

  private $height = '180';
  public $area = '经济案件';

  public function cry(){
    echo '555<br  />';
  }
  public function bianhu(){
    echo '我的当事人是无罪的<br />';
  }
}


$zhoukou = new Human();
$zhoukou->cry();

$xiaoming = new Stu();
$xiaoming->cry();
$xiaoming->study();

$lizhuang = new Lawer();
$lizhuang->cry();
$lizhuang->bianhu();




 ?>
