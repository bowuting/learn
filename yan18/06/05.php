<meta charset="utf-8">
<?php

//php中函数不能重复定义
function t()
{
  echo "t","<br />";
}
t();


//类中的函数  和 全局函数  可以重名
class Clock{
  public function time(){
    echo "现在的时间戳是","<br />";

  }
  public function time2(){
    echo "现在是真正时间戳是",time(),"<br />";        //系统的time()
    echo "现在是真正时间戳是",$this->time(),"<br />"; //自身的time()

  }
}

$a = new Clock;
$a->time();
$a->time2();
?>
