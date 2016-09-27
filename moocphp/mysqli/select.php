<?php

$mysqli = @new mysqli('localhost','root','zc5210','test');

if ($mysqli->errno) {
  die('mysql connect error : ' . $mysqli->connect_error);
}

$mysqli->set_charset('utf8');



$sql="SELECT id,username,age FROM user";
$mysqli_result = $mysqli->query($sql); //成功返回对象，错误返回false
if ($mysqli_result && $mysqli_result->num_rows>0) {
    echo "结果集中有" .  $mysqli_result->num_rows  . "条记录";
    $rows = $mysqli_result->fetch_assoc();
    print_r($rows);
} else {
    echo "查询错误或结果集中没记录";
}






 ?>
