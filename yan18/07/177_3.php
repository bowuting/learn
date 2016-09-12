<?php


//imagecopymerge();


//读取大图
$dst = imagecreatefrompng('1.png');

//读取小图
$src = imagecreatefrompng('test.png');

imagecopymerge($dst,$src,410,200,0,0,440,442,80);

echo imagepng($dst,'touming.png')?"ok":"fail";





 ?>
