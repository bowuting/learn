<?php


  //下标是数字的直接用for循环
  $arr = array('a','b','c','d','e' );
  for ($i=0; $i < count($arr); $i++) {
    echo $arr[$i],'<br>';
  }


  //键值不是数字的，用foreach
  $arr = array('age' => 28,'height' => 180,'name' => 'lisi');
  foreach ($arr as $key => $value) {
    echo $key,"-->",$value,"<br>";
  }


  //只去键  不去值
  foreach ($arr as $value) {
    echo $value,'<br>';
  }

 ?>
