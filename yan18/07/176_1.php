<?php

/*
  画图，矩形 椭圆 圆弧

*/

//画布
$im = imagecreatetruecolor(800,600);
$gray = imagecolorallocate($im,200,200,200);
$blue = imagecolorallocate($im,0,0,255);
$red = imagecolorallocate($im,255,0,0);

imagefill($im,0,0,$gray);

//画矩形
imagerectangle($im,200,150,600,450,$blue);

//画椭圆
imageellipse($im,400,300,400,300,$red);

//画圆
imageellipse($im,400,300,300,300,$red);


header('content-type: image/png');
imagepng($im);

imagedestroy($im);


 ?>
