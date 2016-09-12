<?php

//_call在tp中的应用
class Action{
  public function bj(){
    echo "bj天气预报";
  }
  public function __call($p,$args){
    echo $p,"天气预报";
  }
}

$action = new Action;
$method = $_GET['method'];
if($method)
$action->$method();
 ?>
