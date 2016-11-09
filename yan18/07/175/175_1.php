<?php

  /*
  图片里写中文
  函数：imagettftext()
  */

  $file = '../1.png';
  $im = imagecreatefrompng($file);


  $red = imagecolorallocate($im,200,120,150);

  //imagettftext($im,'30',350,20,100,$red,'./msyh.ttf','哈哈哈 ');

  imagettftext($im,'80',20,1000,500,$red,'./msyh.ttf','不明真相的吃瓜群众');



  header('content-type: image/png');
  imagepng($im);

  imagedestroy($im);



 ?>
