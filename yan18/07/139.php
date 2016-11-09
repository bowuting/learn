<?php

//文件内容的读取与写入

//要求：把a.txt文件的内容读出来，赋给一个$str变量


//file_get_contents();
//获取文件内容，或者网络资源的内容
//比较快捷的一个函数，帮我们封装了打开、关闭等功能
//次函数一次性把文件的内容全部读出来，放内存里
//一次工作中，处理上百M的大文件，慎用此函数
$str = file_get_contents('./a.txt');
echo $str;

$url = 'http://bowuting.com';
echo file_get_contents($url);//读取远程资源

// 读出来的内容能否写到另一个文件呢？！
// 用file_put_contents 把内容写入到文件
// 也是一个快捷函数
file_put_contents('./b.txt',$str);



 ?>
