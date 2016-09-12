
<?php
/*
初始化文件
作用：框架初始化
*/

define ('ROOT',str_replace('\\','/',dirname(dirname(__FILE__))) . '/');
//ROOT文件夹
echo ROOT;

require (ROOT.'include/db.class.php');   //引入数据库类
require (ROOT.'include/conf.class.php'); //引入配置文件类
require (ROOT.'include/log.class.php');

define ('DEBUG',true);                   //定义调试模式
if (defined('DEBUG')) {
  error_reporting(E_ALL);
} else {
  error_reporting(0);
}


                                          //递归过滤参数  $_GET  $_POST
                                          //日志记录功能


 ?>
