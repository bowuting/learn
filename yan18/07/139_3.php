<?php
//fopen():打开一个文件，返回一个句柄资源

$file = 'b.txt';
$fh = fopen($file,'r+');


echo fread($fh,10);

$fh = fopen($file,'r+');//从文件头开始写，会覆盖原来的文件
var_dump(fwrite($fh,'test'));

echo "<hr />";
$fh = fopen($file,'w');  //会清空原来的文件
fclose($fh);

$file = 'a.txt';
echo "<hr />";
$fh = fopen($file,'a');  //追加文件 a+可以读
fwrite($fh,'test');



 ?>
