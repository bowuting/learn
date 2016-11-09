

<?php

header('Content-type:text/html;charset=utf-8');

  class Human
  {
    public $name ;
    public $gender ;
    public function __construct($name,$gender)
    {
      echo "这是构造函数","<br />";
      $this->name = $name;
      $this->gender = $gender;
    }
    public function __destruct()
    {
        echo $this->name,"<br />";
        echo "析构函数","<br />";
    }
  }



  $a = new Human('bowuting','男');
  $b = new Human('ct','女');
  $c = new Human('mupan','女');
  $d = new Human('mupan','F');
  echo $a->name,"<br />";
  echo $b->name,"<br />";
  echo $c->name,"<br />";

  echo $a->gender,"<br />";
  echo $b->gender,"<br />";
  echo $c->gender,"<br />";

  unset($a);
  $b = NULL;
  $c = 2;
  echo '<hr />';
/****
最后一次销毁，是PHP页面执行完毕，43行业执行完了
然后 系统 回收所有内存，所以  最后一个析构函数也执行
所以 显示 在hr   黑线 后面
****/

 ?>
