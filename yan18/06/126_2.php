<?php

/*
class Human{
  private $money = '30两';
  protected $age = 23;
  public $name = 'bowuting';
}

$lili = new Human();
echo $lili->name;
//ehco $lili->age;             //不可访问
//echo $lili->sister;          //位定义的属性

*/


  class Human{
    private $money = '30两';
    protected $age = 23;
    public $name = 'bowuting';
    public function __get($property){
      echo "你想访问我的 $property 属性<br />";
    }
    public function __set($a,$b){
      echo "你想添加$a";
      echo "值是 $b<br />";
    }


  }

  $lili = new Human();

echo $lili->name,'<br />';
echo $lili->age;
echo $lili->si;


$lili->aaa = 111;


print_r($lili);

echo "<hr />";


class dog{
  public $leg = 4;
  protected $bone = '骨头';
  public function __isset($p){
    echo "你想判断我的 $p 属性，  属性不存在";
  }
  public function __unset($p){
    echo "你想去掉我的 $p 属性，  不允许";
  }
}


$d = new dog();
if(isset($d->leg))
  echo $d->leg;
isset($d->l);

echo '<hr />';
unset($d->leg);
print_r($d);
unset($d->bo);
print_r($d);



 ?>
