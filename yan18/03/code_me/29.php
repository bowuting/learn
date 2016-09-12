<?php

  echo time();
  echo "<br>";
  print_r(microtime());
  echo "<br>";
  echo microtime(true);
    echo "<br>";

  $start = microtime(true);
  for ($i=0; $i <10000; $i++) {
    $a = 300000/43252523;
  }
  $end   = microtime(true);

  echo $end - $start;

 ?>
