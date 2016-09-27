<?php

$curl = curl_init('http://www.baidu.com');
$ee = curl_exec($curl);
curl_close();

print_r($ee);






 ?>
