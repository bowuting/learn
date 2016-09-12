<?php

$url = 'http://baidu.com';

//初始化
$ch = curl_init();

//设置选项
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//将curl_exec的结果以文件流的形式返回，而不是直接输出



//执行并获取结果
$t = curl_exec($ch);
print_r($t);

//释放资源
curl_close($ch);





 ?>
