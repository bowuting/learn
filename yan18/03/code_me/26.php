<?php

  function t1($value)
  {
    $value += 1;
  }

  function t2(&$value)
  {
    $value += 1;
  }

  $a1 = 2;
  $a2 = 2;
 t1($a1);
 t2($a2);

 echo $a1;
 echo $a2;

 ?>
