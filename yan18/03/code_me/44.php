<?php

  define('PI', 3.14);
  echo PI,'<br>';

  if (defined('PI')) {
    echo "存在";
  }else {
      echo "不存在";
  }

  echo "<br>";

//开发中：先判断一个常量是否定义过，
  if (!defined(HEI)) {
    define('HEI', 8846);
    }
    echo HEI,'<br>';

    $s = 'HEI';
    echo $s,'<br>';   //显示字符串HEI

    echo constant($s); //此句显示8848


 ?>
