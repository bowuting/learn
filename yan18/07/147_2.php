<?php
//用迭代来创建级联目录
//借助栈，递归都是可以转换成迭代的

function mkdir_p($path){
  $arr = array();

  while(!is_dir($path)){
    //a/b/c/d 如果不是目录，则是我的工作
    array_unshift($arr,$path);//注意：yu array_push( )的区别
    $path = dirname($path);

  }
  foreach ($arr as $v ) {
    echo '创建'.$v.'成功<br />';
    mkdir($v);
  }

  return $arr;
}


print_r(mkdir_p('./a/b/c/d'));



 ?>
