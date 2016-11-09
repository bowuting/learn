<?php

/**
方法1：
function mkdir_p($path){

  //需要创建的也存在
  if(is_dir($path)){
    return true;
  }

  //父目录存在
  if(is_dir(dirname($path))){
    return mkdir($path);
  }

  //父目录也不存在
  mkdir_p(dirname($path));//此处递归
  return mkdir($path);


}

echo mkdir_p('./b/c/e/d/f') ? 'ok' : 'faile' ;
**/


/*
//方法2：
function mkdir_p($path){

  //如果目录存在，则直接返回
  if(is_dir($path)){
    return true;
  }

  //如果目录不存在，创建
  //问题：父目录一定存在吗！？
  //答：不一定，因此我要求，父目录存在则创建该目录，父目录不存在则创建父目录

  return is_dir(dirname($path)) || mkdir_p(dirname($path)) ? mkdir($path):false;

}*/

//echo mkdir_p('./b/c/e/d/f') ? 'ok' : 'faile' ;


//上面两种创建递归级联目录，是为了练习递归。
//在开发中，php5中的mkdir函数，自身就能够创建级联目录

echo mkdir('./aaa/bbb/ccc/dd/de/f',0777,true)?'ok':'file';

 ?>
