<?php

//引入
require('../Smarty3/libs/Smarty.class.php');

//实例化
$smarty = new Smarty();


//配置
$smarty->template_dir = './temp';
$smarty->compile_dir  = './comp';

//赋值
$smarty->assign('xxx','今天两会召开中');
$smarty->assign('content','我的mac');

//显示页面
$smarty->display('news.html');



 ?>
