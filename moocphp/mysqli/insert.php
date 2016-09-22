<?php

$mysqli = @new mysqli('localhost','root','zc5210','test');

if ($mysqli->errno) {
  die('mysql connect error : ' . $mysqli->connect_error);
}

$mysqli->set_charset('utf8');


//增删改
$sql = "INSERT user(username,password) VALUES ('bowweeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeuting','bowuddddddting');";

$res = $mysqli->query($sql);
if ($res) {
  //得到上一步插入操作产生的自增长值
  echo "恭喜您 注册成功" . $mysqli->insert_id . "位用户<br />";
} else {
  //输出错误信息
  echo $mysqli->errno . " : " .$mysqli->error;
}
 ?>
