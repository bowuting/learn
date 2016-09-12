<?php


/*
1/造画布， 长、宽 imagecreatetruecolor($w,$h)
  返回 资源类型
*/
$width = 300;
$height = 200;
$im = imagecreatetruecolor($width,$height);

/*
2/创建颜料
*/

$blue = imagecolorallocate($im,0,0,225);


/*
  3 画图，
  最简单的方法：泼墨渲染，imagefill
  bool imagefill(画布资源，填充的起始点x,填充起始点y,填充颜色)
*/
imagefill($im,0,0,$blue);


/*
  4 保存
  imagepng
  imagejpeg
  imagegif
*/

  imagepng($im,'./01.png');

  /*
   5-销毁画布，释放资源
  */

  imagedestroy($im);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <img src="./01.png" alt="" />
  </body>
</html>
