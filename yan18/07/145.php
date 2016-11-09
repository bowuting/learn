<?php

function read($path){
  $dh = opendir($path);
  while (($row = readdir($dh)) !== false) {
    //过滤掉. 和 ..
    if(($row == '.') || ($row == '..')){
      continue;
    }
    echo $row,'<br />';
    if (is_dir($path.'/'.$row)) {
      read($path.'/'.$row);
    }
  }


  closedir($dh);
}

read('./');


 ?>
