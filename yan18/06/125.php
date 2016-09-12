<?php
/*
class single{

}*/


/*
class single
{

  public $hash; //随机码s

  //构造方法，  保护或私有   外部不能new
  private final function __construct()
  {
    $this->hash = mt_rand(1,999);
  }
  public static function getInstance() {
       return new single();
   }
}

$s1 = single::getInstance();
$s2 = single::getInstance();


echo $s1->hash,'<br />';
echo $s2->hash,'<br />';
//两个值还是不一样，看来还不是单例模式
*/

class single
{

  public $hash; //随机码s
  private static $ins = NULL;
  //构造方法，  保护或私有   外部不能new
  private final function __construct()
  {
    $this->hash = mt_rand(1,999);
  }

  public static function getInstance() {
      if (!(self::$ins instanceof self) ) {
        self::$ins  = new single();
      }
      return self::$ins;
   }
}

$s1 = single::getInstance();
$s2 = single::getInstance();


echo $s1->hash,'<br />';
echo $s2->hash,'<br />';


 ?>
