<?php
//变量与指针

$age = 10;

function grow($age){
  $age += 1;
  return $age;
}
echo grow($age),'<br />';  //11
echo $age,'<br />';        //10



$age_1 = 10;

function grow_1($age_1){
    $age_1 += 1;
  return $age_1;
}
echo grow_1(&$age_1),'<br />';  //11 //引用传值
                                //函数内部的$age和全局的$age是同一个值

echo $age_1,'<br />';          //11
phpinfo();

 ?>
