<?php
  $a = 0;

  //echo "t1";
  $t1 = time();
  while (1) {
    $a += 1;
    if($a >= 100000000)
      break;
  }
  $t2 = time();

  $t3 = $t2 - $t1;
  echo $a,'<br />';
  echo $t3;

 ?>
