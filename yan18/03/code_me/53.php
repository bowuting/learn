<?php
  $arr = array(1,2,3,array(4,array(5,6)));
  function sum($arr)
  {
    static $sum  = 0;
    foreach ($arr as $v)
    {
      if (is_array($v))
      {
        sum($v);
      }
      else
      {
        $sum += $v;
      }
  }
    return $sum;
  }
  echo sum($arr);
 ?>
