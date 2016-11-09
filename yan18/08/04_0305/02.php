<?php


require('../Smarty3/libs/Smarty.class.php');

//实例化
$smarty = new Smarty();


//配置
$smarty->template_dir = './temp';
$smarty->compile_dir  = './comp';



//从数据库中取出会员信息，往往是数组形式
$user = array('name'=>'刘备','age'=>'28','weapon'=>'双剑');

$zhangfei = array('name'=>'张飞','age'=>'25','weapon'=>'丈八蛇矛');

$guanyu = array(0=>'关羽',1=>'25','weapon'=>'青龙偃月刀');

$smarty->assign('name',$user['name']);
$smarty->assign('age',$user['age']);
$smarty->assign('weapon',$user['weapon']);

$smarty->assign('zhangfei',$zhangfei);

$smarty->assign('guanyu',$guanyu);

$smarty->display('liubei.html');







 ?>
