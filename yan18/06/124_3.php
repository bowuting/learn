<?php
class a{
  public function a1(){
    echo "this is function a1()<br />";
  }
}

class b extends a{
  public function b1(){
    $this->a1();
  }
  public function b2(){
    parent::a1();
  }
}

$b = new b();
$b->b1();
$b->b2();

/*
上面2个调用，显示结果一样
所以从速度的角度讲，parent会快一点

但是从面向对象的角度看，继承过来的，就是自己的、
$this 更符合OOP的思想

反例：
class a{

}
class b extends a{

}
class c exdents b{
  parent::parent::parent:: //这样写显然不科学、
  $this->                  // 继承过来 就是 自己的、  这样科学点
  //但是私有属性，就用parent，因为私有属性继承不过来
}
*/



 ?>
