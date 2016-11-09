<?php

$area = array(
array('id'=>1,'name'=>'安徽','parent'=>0),
array('id'=>2,'name'=>'海淀','parent'=>7),
array('id'=>3,'name'=>'濉溪县','parent'=>5),
array('id'=>4,'name'=>'昌平','parent'=>7),
array('id'=>5,'name'=>'淮北','parent'=>1),
array('id'=>6,'name'=>'朝阳','parent'=>7),
array('id'=>7,'name'=>'北京','parent'=>0),
array('id'=>8,'name'=>'上地','parent'=>2)
);

/*
//用static
function familytree($arr,$id){
  static $tree = array();

  foreach ($arr as $v) {
    if ($v['id'] == $id) {
      $tree[] = $v;     //该句表示追加到数组$tree
      if($v['parent'] > 0)
      familytree($arr,$v['parent']);
    }
  }
  return $tree;
}*/


//不用static
function familytree($arr,$id){
   $tree = array();

  foreach ($arr as $v) {
    if ($v['id'] == $id) {

      if($v['parent'] > 0)
      $tree = array_merge($tree,familytree($arr,$v['parent']));
      $tree[] = $v;     //该句表示追加到数组$tree

    }
  }
  return $tree;
}

print_r(familytree($area,3));


 ?>
