<?php

//下面这个函数 会把  zidongjiazai  注册成一个自动加载函数 相当于 __autoload()
spl_autoload_register('zidongjiazai');



function zidongjiazai($c){
  require('./'.$c.'.php');

}

$lisi = new HumanModel();
$lisi->t();


 ?>
