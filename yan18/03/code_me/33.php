<?php

//双引号与单引号的区别
  $st1 = '\' \\ \n \t \s \v';
  $st2 = " \" \\ \n test's \$ \t  ";
  echo $st1,"<br>";
  echo $st2,"<br>";

  $age = 29;
  $st3 = 'he is $age years old';
  $st4 = "he is $age years old";

//双引号可以引入变量
  echo $st3,"<br>";
  echo $st4,"<br>";

//单引号不需要分析串内有没有变量，需要转义的内容也少，所以速度比双引号块。




 ?>
