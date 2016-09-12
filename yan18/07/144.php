<?php

//1、不求理解，先会写。。
//2、理解，
//题目，求1到n的和、
/*
方法1：
function sum($n)
{
  $sum = 0;
  for ($i=1; $i <= $n; $i++) {
    $sum += $i;
  }
  return $sum;
}

echo sum(10000000);
*/


//方法2：
/*
function sum($n){
  return array_sum(range(1,$n));
}
echo sum(100);
*/


function sum($n){
  if ($n == 1) {
    return 1;
  }
  return $n + sum($n - 1);
}

echo sum(100);





 ?>
