<?php

/*
接收文件，并分目录存储，生成随机文件名
1、根据时间戳，并按一定规则创建目录
2、获取文件后缀名
3、判断大小
*/

//计算并创建目录

function mk_dir(){
  $dir = date('md/i',time());
  if (is_dir('./' . $dir)) {
    return $dir;
  } else {
    mkdir('./' . $dir,0777,true);
    return $dir;
  }

}

function getExt($file){
  $tmp = explode('.',$file);
  return end($tmp);
}

function randName(){
  $str = 'abcdefghijklmnopqrstuvwxyz1234567890';
  return substr(str_shuffle($str),0,6);
}


if($_FILES['pic']['error'] != 0){
  echo '上传失败';
  exit;
}

$pic =  $_FILES['pic'];
print_r($_FILES);

$path = './' . mk_dir() . '/' . randName() . '.' . getExt($pic['name']);
if(move_uploaded_file($pic['tmp_name'],$path)){
  echo "成功";
} else {
  echo "失败";
}


 ?>
