<?php
<<<<<<< HEAD
/*
在 模板中 {$title}  则说明$titke标签放在被assign赋过值，因此能显示
思考：smarty的标题变量.除了assign 还能有哪些?


答:
smarty标签的变量,来源于3个部分
1: php 中 assign  分配的变量
2:smarty的系统保留变量
3:从配置文件读取到的配置变量


*/

require('../Smarty3/libs/Smarty.class.php');

//实例化
$smarty = new Smarty();


//配置
$smarty->template_dir = './temp';
$smarty->compile_dir  = './comp';



//三种来源之assign
$smarty->assign('name','罗隐');
$smarty->assign('poem','我未成名君未嫁,可能俱是不如人');





//三种来源之系统保留变量
//$smarty->assign('id',$_GET['id']);


$smarty->display('04.html');

$smarty->config_dir = './conf';

//3种变量来源之 系统保留 不用赋值，自动获取

define('HEI',8846);


$smarty->display('04.html');


//3种变量之 配置文件中的配置变量
/*
  1、配置文件一般以.conf做后缀
  2、配置文件的写法是：
    选项1 = 值1
    选项2 = 值2
  3、配置smarty的config_dir 并把配置文件放在该目录下
*/





 ?>
