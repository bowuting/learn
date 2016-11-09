<?php

$url = 'http://baidu.com';

//初始化
$ch = curl_init($url);

//执行并获取结果
curl_exec($ch);

//释放资源
curl_close($ch);




 ?>
