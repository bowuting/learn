
<?php

header('Content-type:text/html;charset=utf-8');

  class Human
  {
    public $name ;
    public $gender ;

    public function __destruct()
    {
        //echo $this->name,"<br />";
        echo "bowuting","<br />";
    }
  }

$a = new Human;
$b = $c = $d = $a;

unset($a);
echo "<hr />";
/****
问题：bowuting打印在几次
      打印在<hr />后面还是前面
****/

?>
