<?php

//用迭代来实现：
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


//迭代，效率比递归高，代码没多多少、
function tree($arr,$id){
  $tree = array();
  while ($id !== 0) {
    foreach ($arr as $v) {
      if($v['id'] == $id) {
        $tree[] = $v;
        $id = $v['parent'];
        break;
      }
    }
  }
  return $tree;
}

print_r(tree($area,8));


 ?>
