<?php

$str = '当 把 一 组 转 换 成 个 字 符 串 时 将 会 设 置 胶 合 符 将 被 插 入 到 生 成 字 符 串 中 的 数 组 值 之 间 的 字 符 或 代 码';


$char = explode(" ",$str);

//$char = array('中','华','人','民','共','和','国','b','df','w');
shuffle($char);
$code = implode('',array_slice($char,0,4));

$im = imagecreatetruecolor(100,40);

$grey = imagecolorallocate($im,180,200,200);
$blue = imagecolorallocate($im,0,0,255);

imagefill($im,0,0,$grey);

imagettftext($im,14,0,2,20,$blue,'./msyh.ttf',$code);

header('content-type: image/jpeg');
imagejpeg($im);

imagedestroy($im);




 ?>
