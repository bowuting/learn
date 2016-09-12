<?php

//取数据
$title = "两会召开";
$content = "nice";


require_once 'mini.php';

$temp = new Mini();
//$comp = $temp->display('03temp.html');

$temp->assign('title',$title);
$temp->assign('content',$content);
//print_r($temp->_tpl_var);
$temp->display('03temp.html');
 ?>
