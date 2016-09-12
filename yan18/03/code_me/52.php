<?php
//递归打印当前目录下所有的文件，目录和子目录

  function printdir($path)
  {
    $dh = opendir($path);


    //返回目录中下一个文件的文件名。文件名以在文件系统中的排序返回。
    while ( ($row=readdir($dh)) !== false) {
      echo $row,'<br>';

      if ($row == '.' || $row == '..') {
        continue;
      }

      if (is_dir($path . '/' . $row)) {
        printdir($path . '/' . $row);
      }
  }

  closedir($dh);
}

  $path = '.';
  printdir($path);

 ?>
