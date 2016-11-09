<?php

foreach(array('a','b','c','d') as $v) {
  $path = './misc/'.$v;
if(file_exists($path) && is_dir($path)){
    echo $path."目录已存在".'<br />';
  } else {
    if(mkdir($path)){
      echo $path."创建成功";
    } else {
      echo $path."创建失败";
    }
    echo "<br />";
  }
}
foreach (array('a','b','e') as $v) {
  $path = './misc/'.$v;
  if(file_exists($path) && is_dir($path)){
    if(rmdir($path)){
      echo $path.'删除成功 <br />';
    }else {
      echo $path.'删除失败 <br />';
    }
  }else {
    echo $path."不存在".'<br />';
  }
}



 ?>
