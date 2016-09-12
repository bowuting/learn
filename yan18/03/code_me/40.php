<?php


  //echo current($arr),'<br>';输出当前游标的对应值


  $arr = array('a','b','c','d');//初始化数组的游标是0
  echo current($arr),'<br>';

  next($arr);                   //游标向后移一个
  echo current($arr),'<br>';

  end($arr);                    //游标指向最后
  echo current($arr),'<br>';

  prev($arr);                   //游标指向前一个
  echo current($arr),'<br>';

  reset($arr);                  //初始化游标  复位
  echo current($arr),'<br>';

    //echo "<br>";
    //while ($a = current($arr)){
    //echo $a,'<br>';
    //next($arr);

    //不过上述方法，当数组值中有0，false之类的时候，则存在bug
    //用each函数


 ?>
