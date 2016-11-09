<?php

/*
final class Human
{


}

class Stu extends Human
{


}*/


class Human{
  final public function say(){
    echo "华夏子孙<br />";
  }
  public function show(){
    echo "哈哈<br />";
  }
}


class Stu extends Human{

}

class FreshMan extends Stu{
  public function say(){
    echo "我要出国<br />";
  }
}
$ming = new FreshMan();
$ming->say(); //final方法可以继承
$ming->show();











 ?>
