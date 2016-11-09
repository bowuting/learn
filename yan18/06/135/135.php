<?php


//类 的自动加载

function __autoload($c){
  //echo "string";
  require ('./'.$c.'.php');
}

$lisi = new HumanModel();
$lisi->t();


 ?>
