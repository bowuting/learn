<?php
//魔术常量
echo "当前在运行的是",__FILE__,"文件<br />";   //执行脚本的路径
echo "我在",__LINE__,"行<br />";   //行号

function ls_w()
{
  echo "ls<br />";
  echo __METHOD__,'<br />';   //返回方法名

}

echo __DIR__,'<br />';         //返回目录

ls_w();

class Human{
  public static function returnclassname(){
    echo __class__,'<br />';   //显示类名
  }
}

Human::returnclassname();






 ?>
