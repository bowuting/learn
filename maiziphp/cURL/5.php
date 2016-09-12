<?php

$url = 'http://bai2du.com/dad.html';

//初始化
$ch = curl_init();

//设置选项
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//将curl_exec的结果以文件流的形式返回，而不是直接输出

//执行并获取结果
$t = curl_exec($ch);

if ($errno = curl_errno($ch)) {
  //echo curl_errno($ch);exit;//得到错误编号
  echo curl_strerror($errno);exit;
}



$info = curl_getinfo($ch);
print_r($info);

//释放资源
curl_close($ch);







 ?>
