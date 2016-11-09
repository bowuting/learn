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
//画圆弧
//imagearc($im,400,300,300,300,-90,0,$red);

//画圆弧并填充 比上面函数多一个参数   两个叠在一起，饼状图
imagefilledarc($im,400,300,370,370,-45,0,$blue,0+4);
imagefilledarc($im,400,300,350,350,-45,0,$red,0+4);


header('content-type: image/png');
imagepng($im);

imagedestroy($im);
