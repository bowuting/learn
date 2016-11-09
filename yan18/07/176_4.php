<?php

//imagefill的用法

//画布
$im = imagecreatetruecolor(800,600);
$gray = imagecolorallocate($im,200,200,200);
$blue = imagecolorallocate($im,0,0,255);
$red = imagecolorallocate($im,255,0,0);

imagefill($im,10,10,$gray);


header('content-type: image/png');
imagepng($im);

imagedestroy($im);


 ?>
