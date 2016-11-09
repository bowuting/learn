<?php
//验证mysqli是否开启
//phpinfo();
//检测扩展是否已经加载
var_dump(extension_loaded('mysqli'));
//返回bool(true)则说明已经开启
$pwd=`pwd`;
echo $pwd;
//3检测函数是否存在
var_dump(function_exists('mysqli_connect'));
//返回 true

//4 当前已开启的扩展
print_r(get_loaded_extensions());

 ?>
