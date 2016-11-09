<?php

require('../Smarty3/libs/Smarty.class.php');

//实例化
$smarty = new Smarty();


//配置
$smarty->template_dir = './temp';
$smarty->compile_dir  = './comp';

$usr = array('name'=>'刘备','age'=>'28');
$smarty->assign($usr);//可直接发数组

$smarty->assign('arr',array('country'=>array('prov'=>array('city'=>'xi\'an'))));
//多维数组的许可

//连续往某个标签赋值时，用append
$smarty->append('stu','李四');
$smarty->append('stu','王五');


$smarty->display('05.html');









 ?>
