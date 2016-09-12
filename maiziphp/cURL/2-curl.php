<?php

//初始化
$ch = curl_init();
///print_r($ch);

//设置相关选项
curl_setopt($ch,CURLOPT_URL,'http://baidu.com');

//执行并获取结果
curl_exec($ch);

//释放资源
curl_close($ch);




 ?>
