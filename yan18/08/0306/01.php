<?php


require('../Smarty3/libs/Smarty.class.php');

//实例化
$smarty = new Smarty();


//配置
$smarty->template_dir = './temp';
$smarty->compile_dir  = './comp';

class human {
  public $name = "zhangsan";
  public $age  = "28";
  public function sayhi(){
    return "hello world";
  }
}

$man = new human();


$smarty->assign('man',$man);

$smarty->display('01.html');



 ?>
