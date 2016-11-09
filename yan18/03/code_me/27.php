<?php

    $a = 5;
    function F()
    {
      global $a;
      echo $a;
    }
    F();

    function t1()
    {
      print_r($_GET);

    }
    t1();  //该函数要运行，需要在地址栏后面追加 ?id=2&i=1

 ?>
