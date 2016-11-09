<?php

//一个文件每行一个用户名，现需要将这些用户名插入到数据库~  如何做

$fh = fopen('name.txt','rb');
// echo  fgets($fh),'<br />'; 一行一行的读取
// echo  fgets($fh),'<br />'; 会读下一行

/*
while ($str = fgets($fh)) {
  echo $str,'<br />';
}*/

//feof函数，判断指针是否已经走到结尾
//while(!feof($fh)){
//  echo fgets($fh),'<br />';
//}



//file函数，直接读取文件，按行划分成数组
//一次读取到内存，大文件慎用，
//$arr = file('name.txt');
//print_r($arr);



//写入到数据库：
$db = new mysqli('localhost','root','root','test');
if ($db->connect_errno) {
      echo "problem<br />";
    } else {
      echo "good<br />";
      while(!feof($fh))
      {

      $query = "insert into names (name) values ( '".fgets($fh)."')";
      //echo $query;
      $db->query($query);
      }
    }

    echo date('Y-m-d H:i:s',2);


 ?>
