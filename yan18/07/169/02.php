<?php

print_r($_FILES);

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

// foreach ($_FILES as $k => $v) {
//   echo $k,"<br />";
//   print_r($v);
//   }
//
// exit;
foreach ($_FILES as $k => $v) {
  if($v['error'] != 0){
    echo $k,'上传失败  ';
    echo "错误代码是",$v['error'],'<br />';
    continue;
  }
  $path = './' . mk_dir() . '/' . randName() . '.' . getExt($v['name']);
  if(move_uploaded_file($v['tmp_name'],$path)){
    echo $k,"上传成功","<br />";
  } else {
    echo $k,"上传失败","<br />";
  }
}

 ?>
