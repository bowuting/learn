<?php

/*
abstract class FlyIdea{
  public abstract function engine(){

  }
  public abstract function blance(){

  }
  //报错
  //抽象方法，不能有方法体
}*/

abstract class FlyIdea{
  public abstract function engine();
  public abstract function blance();
  //抽象方法不能有方法体
}

//抽象方法不能实例化，下面这样写是错的~
//$apache = new FlyIdea();

abstract class Rocket extends FlyIdea{
  public function egine(){
    echo '点燃火药，失去平衡<br />';
  }
  //继承了一个抽象方法
  //所以这个类必须是也是抽象的、
}




//Fly类中，所有抽象方法都已实现
class Fly extends Rocket{
  public function engine(){
    echo "用力一扔<br />";
  }
  pubLic function blance(){
    echo "两个纸翼保持平衡<br />";
  }
  public function start(){
    $this->engine();
    for ($i=0; $i < 10; $i++) {
      $this->blance();
    }
    echo "平移飞行<br />";
  }

}



$apache = new Fly();
$apache->start();








 ?>
