<?php
  $arr = array('a' => 'zzh', 'b' => 'bow' ,'c' => NULL);
  if (isset($arr['c'])) {
    echo "单元存在";
  }
  else {
    echo "单元不存在";
  }

  echo "<br>";

  if (array_key_exists('c',$arr)) {
    echo "存在";
  }else {
    echo "不存在";
  }

  echo "<br>";

  if (in_array('zzh',$arr)) {
    echo "存在";
  }else {
    echo "不存在";
  }

 ?>
