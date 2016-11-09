<?php
print_r(glob('./article/*.txt'));
//opendir   打开目录,返回资源
//readdir   读取目录
//closedir  关闭目录
//is_dir    判断是否是目录
//mkdir     创建目录
//rmdir     删除目录


$path = './misc';
$dh = opendir($path);

print_r($dh);
echo "<br />";


/*
echo readdir($dh).'<br />';
*/

// while ($filename = readdir($dh)) {  //直接判断真假不合适，如果有个文件“0”  则会停止循环
//
//   echo $filename.'<br />';
// }


while (($filename = readdir($dh)) !==  false) {
  echo $filename;
  if(is_dir('./misc/'.$filename)){
    echo '是目录';
  }
  echo '<br />';
}

closedir($dh);





 ?>
