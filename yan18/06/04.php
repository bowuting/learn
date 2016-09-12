<meta charset="utf-8">
<?php

  $aaa = 0;
  /**
   *
   */
  class Human{
    public $age = 1;

}

$a = new Human();
echo $a->age,"<br />";

/**
 *
 */
class People{
  public $age; //如果不赋值  则属性的初始值是NULL

}

$b = new People();
var_dump($b->age);//打印NULL
echo "<br />";
echo time();

 ?>
