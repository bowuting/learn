<?php
$sw = 400;
$sh = 442;


//创建大图画布
$big = imagecreatetruecolor($sw * 2 + 20,$sh);


//创建灰色
$gray = imagecolorallocate($big,200,200,200);


//填充大图
imagefill($big,0,0,$gray);

//再读小图
$small = imagecreatefrompng('test.png');

imagecopy($big,$small,0,0,0,0,400,442);

header('content-type: image/png');
imagepng($big);


 ?>
