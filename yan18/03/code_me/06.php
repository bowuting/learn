<?php
   $a = 1;
   $b = 2;

   $b = $a;   //传值赋值
   $a = 't';
   var_dump($a,$b);

   $b = &$a;  //引用赋值
   $a = 'w';
   var_dump($a,$b);
echo "test";
 ?>
