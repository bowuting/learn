<meta charset="utf-8">

<?php

  $a = '1';
  $b = 1;
  $c = 1.2;
  echo $a, "<br />";

  echo $b, "<br />";


  echo gettype($a), "<br />";

  echo gettype($b), "<br />";
  echo gettype($c), "<br />";

  //判断是否是我想要的类型
    if(is_int($a)){
      echo "a是整型";
    }else {
      echo "a不是整型";
    }


 ?>
