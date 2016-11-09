<?php
#self 和 parent的用法

class Human{
  static $head = 1;
  public function say(){
    echo Human::$head.'<br />';
  }
  public function show(){
    echo "hello";
  }
}

//echo Human::$head;

$lisi = new Human();
$lisi->say();

/**
 *
 */
class Stu extends Human
{

  static public $head = 2;

  public function say(){
    echo self::$head.'<br />';
    echo parent::$head.'<br />';
  }
  public function show(){
    parent::show();
    //对比parent::show()  和    $this->show();
  }

}

$ming = new Stu();
$ming->say();
$ming->show();
$ming->show();













 ?>
