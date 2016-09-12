<?php

/*
  $fh = fopen('./msg.txt','a');  //resource　（资源）类型

  fwrite($fh,"test\n");

  fclose($fh);
  echo "hello";
*/


  $fh = fopen('./msg.txt','a');
  $str = $_POST['title'] .",".$_POST['content'] . "\n";

  fwrite($fh,$str);
  fclose($fh);
  echo 'ok';



 ?>
