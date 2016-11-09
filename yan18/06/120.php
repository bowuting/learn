<?php
   header('Content-type:text/html;charset=utf-8');
/**
 *
 */
class Human
{

  function __construct()
  {
    echo "出生了 <br />";
  }
}


/**
 *
 */
class Stu extends Human
{

  function __construct()
  {
    echo "出生了 <br />";
  }
}


/**
 *
 */
class King extends Human
{

  function __construct()
  {
    echo "紫气东来"; //构造方法的重写
  }
}

$xiaoming = new Stu();   //构造方法的继承，，直接继承
$huangdi = new King();   //构造方法重写之后，直接执行子类的构造方法

echo "<hr />";

class Mysql {
  protected $conn = NULL;
  public function __construct(){
    $this->conn = mysql_connect('localhost','root','root');
  }
  public function query($sql)
  {
     return mysql_query($sql,$this->conn);
  }
}

$mysql = new Mysql();
var_dump($mysql->query('use test'));

/**
 *
 */
class Mydb extends Mysql
{
  public function __construct(){
    //return true;
    //子类继承时，有构造函数，一般这么写，
    //先把父类的构造函数调用一下，再写自己增加的内容
    parent::__construct(); //如果不写 这句，会出错
    echo "子类的构造函数<br />";
  }
  public function autoInsert()
  {
    return $this->query('use test');
  }

}

$mydb = new Mydb();
var_dump($mydb->autoInsert());

 ?>
