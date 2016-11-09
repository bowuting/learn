<?php
//无限极分类

/**
为了表示地区之间的上下级关系，人为的加了一个字段
parent

//parent的值，是  该栏目的父栏目的id
//找A栏目的子栏目时，谁的parent值等于A的id,谁就是A的儿子。

$area = array(
array('id'=>1,'name'=>'安徽','parent'=>0),
array('id'=>2,'name'=>'海淀','parent'=>7),
array('id'=>3,'name'=>'濉溪县','parent'=>5),
array('id'=>4,'name'=>'昌平','parent'=>7),
array('id'=>5,'name'=>'淮北','parent'=>1),
array('id'=>6,'name'=>'朝阳','parent'=>7),
array('id'=>7,'name'=>'北京','parent'=>0),
array('id'=>8,'name'=>'上地','parent'=>2),
);

//顺着这层关系，我们可以分析出
0
    安徽
        淮北
            濉溪县
    北京
        朝阳
        昌平
        海淀
            上地

无限极分类，涉及两个应用：
0：找指定栏目的子栏目
1：找指定栏目的子栏目，子子栏目，子孙树
2：找指定栏目的父栏目，父父栏目，。。。顶级目录，家谱树
**/

$area = array(
array('id'=>1,'name'=>'安徽','parent'=>0),
array('id'=>2,'name'=>'海淀','parent'=>7),
array('id'=>3,'name'=>'濉溪县','parent'=>5),
array('id'=>4,'name'=>'昌平','parent'=>7),
array('id'=>5,'name'=>'淮北','parent'=>1),
array('id'=>6,'name'=>'朝阳','parent'=>7),
array('id'=>7,'name'=>'北京','parent'=>0),
array('id'=>8,'name'=>'上地','parent'=>2),
);


//找子栏目，
function findson($arr,$id = 0){
  //$id栏目的儿子都有谁？！
  //答：数组循环一遍，谁的parent值，等于id,谁就是他儿子
  $sons = array();//子栏目数组
  foreach ($arr as $v) {
    if($v['parent'] == $id){
      $sons[] = $v;
    }
  }
  return $sons;
}
//print_r(findson($area,0));


//找子孙树
function subtree($arr,$id = 0,$lev=1){

  static $subs = array();//子孙数组

  foreach ($arr as $v) {
    if($v['parent'] == $id){
      $v['lev'] = $lev;
      $subs[] = $v;
      subtree($arr,$v['id'],$lev+1);
    }
  }
  return $subs;
}
$tree = subtree($area,0,0);
print_r($tree);
foreach ($tree as $v) {
  echo str_repeat('&nbsp;&nbsp;',$v['lev']),$v['name'],'<br />';
}






 ?>
