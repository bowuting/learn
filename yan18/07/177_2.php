<?php
//复制图片小一点，透明效果

$ow = 400;//原始宽度
$oh = 442;//原始高度

$nw = (int)$ow/2;//缩略后的
$nh = (int)$oh/2;//缩略后的

$dst = imagecreatetruecolor($nw,$nh);

$src = imagecreatefrompng('test.png');

imagecopyresampled($dst,$src,0,0,0,0,$nw,$nh,$ow,$oh);


imagepng($dst,'./smalltest.png');
imagedestroy($dst);
imagedestroy($src);









 ?>
