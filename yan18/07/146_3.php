<?php

function rmdir_p($path){
  //不是目录
  if(!is_dir($path)){
      return NULL;
    }

  $dh = opendir($path);
  while (($row = readdir($dh)) !== false) {
    //判断是否是. ..
    if($row == '.' || $row == '..'){
      continue;
    }
    //不是目录，判断是否是普通文件
    if(!is_dir($path. '/' . $row)){
      unlink($path. '/' . $row);
    } else {
      rmdir_p($path . '/' . $row);
    }
  }
  closedir($dh);
  rmdir($path);
  echo '删除了',$path,'<br />';
  return true;

}
   echo rmdir_p('./aaa')?'ok':'faile';


 ?>
