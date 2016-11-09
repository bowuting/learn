<?php
//递归与迭代的区别与联系
//理论上，递归都可以化为迭代


function recsum($n){
  if($n > 1){
    return $n + recsum($n-1);
  } else {
    return 1;
  }
}

echo recsum(100),'<br />';

//迭代：
function recsum_s($n){
  for ($sum = 0,$i=0; $i <= $n; $i++) {
    $sum += $i;
  }
  return $sum;
}
echo recsum_s(100),'<br />';








 ?>
