<?php

$arr = array('name'=>'bowuting','age'=>'18');

$json = json_encode($arr);

print_r($json);

$data = "输出json数据";
$newdata = iconv('UTF-8','GBK',$data);  //将数据转换成GBK格式
echo json_encode($newdata);

//phpinfo();


 ?>
