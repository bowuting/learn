<?php

  $str1 = '丁博武';
  echo strlen($str1);
  echo mb_strlen($str1,'utf-8');

  $str2 = 'abcde';
  $char = 'b';
  echo "<br>";

  if(strpos($str2,$char) !== false){
    echo '含有',$char,'<br>';
  }else{
    echo '不含有',$char,'<br>';
  }

  //替换
  $str = 'fuck';
  $str = str_replace('fuck','f**k',$str);
  echo $str,'<br>';

  //批量替换
  $str = '男人  女人  男孩  女孩';
  $str = strtr($str,array('男' => '女','女' =>'男'));
  echo $str,'<br>';

  //截取字符串
  $str = 'today is sunday';
    echo substr($str,0,5),'<br>';
    echo substr($str,0,-3),'<br>';  //字符串截取  负数表示倒数第几个
    echo substr($str,-10,-5),'<br>';

    //拆分字符串
    $str = 'teach,linux,mysql';
    $arr = explode(',',$str);
    print_r ($arr);
    echo "<br>";

    echo implode($arr,'_'),'<br>';




 ?>
