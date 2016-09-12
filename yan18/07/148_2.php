<?php


$arr = array('a"b',array("c'd",array('e"f')));

function _addslashes($arr){
  foreach ($arr as $k => $v) {
    if(is_string($v)){
      $arr[$k] = addslashes($v);
    }else if (is_array($v)) {
      $arr[$k] = _addslashes($v);
    }
  }
  return $arr;
}



print_r(_addslashes($arr));

print_r($arr);
//$a = 'adad"d';

//echo addslashes($a);








 ?>
