<?php

//批量处理文件，把小于10字节的文件，和含有fuck的文件 删除掉

//思路：循环文件名，判断大小，如果小于10字节，则删之，如果不小于，
//读内容，判断是否有fuck单词，如有，则unlike删除

foreach (array('a.txt','b.txt','c.txt','d.txt') as $v) {
  $file = './article/' . $v;
  if (filesize($file) < 10) {
    unlink($file);
    echo $file."小于10字节的被删了";
    continue;
  } else {
    $cont = file_get_contents($file);
    if(stripos($cont,'fuck') !== false){
      unlink($file);
      echo $file."含有不文明用语被删了";
    }
  }
}










 ?>
