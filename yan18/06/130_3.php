<?php

class Human
{
  public static function whoami(){
    echo "父类的whoami<br >";
  }
  public static function say(){    //子类没有say方法，所以往父类找，
                                   //所以say()里的self是指父类的self
                                   //所以会调用父类的self方法
    self::whoami();
  }
  public static function say2(){ //子类没有say2方法，所以会往父类找
                                 //但是父类用static::whoami
                                 //指调用子类自己的whoami方法
    static::whoami();
  }
}
class Stu extends Human{
  public static function whoami(){
    echo "子类的whoami<br >";
  }
}


Stu::say();  //
Stu::say2();  //




 ?>
