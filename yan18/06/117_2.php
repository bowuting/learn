<?php

header('Content-type:text/html;charset=utf-8');

class Human
{

  private $height = 160;
  public function cry(){
    echo '55555<br />';
  }
}

/**
 *
 */
class Stu extends Human
{


}

$xiaoming = new Stu();
$xiaoming ->cry();


?>
