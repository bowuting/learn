<?php

include './include/init.php';


$conf = conf::getIns();
//读取选项
echo $conf->host,'<br />';
echo $conf->user,'<br />';
echo $conf->passwd,'<br />';
var_dump($conf->template_dir);

//动态追加
$conf->template_dir = __DIR__;
echo $conf->template_dir,'<br />';




 ?>
