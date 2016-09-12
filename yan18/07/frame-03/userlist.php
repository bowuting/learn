<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


require('./include/init.php');


/*
我们的目的:
测试框架能否正常运行
能否正常过滤非法字符
能否正常操作数据库

*/


$test = new TestModel();
$list = $test->select();

///print_r($list);

include(ROOT . 'view/userlist.html');

