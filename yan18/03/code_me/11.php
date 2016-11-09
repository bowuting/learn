<?php
  $a = 16;
  $b = 15;
  $c = 17;

  $d = null;

  $d = (($a >= $b ? $a : $b) >= $d ? ($a >= $b ? $a : $b) : $d) ;

  var_dump($c);

 ?>
