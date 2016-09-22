<?php


//建立连接时 直接打开数据库
//不想看到警告 就用错误抑制符 @ 将其删除
$mysqli = @new mysqli('localhost','root','zc5210','test');
if ($mysqli->connect_errno) {
  die('Connect Error:' . $mysqli->connect_error);
}
//print_r($mysqli);
//echo "<hr />";
//echo '客户端的信息:' . $mysqli->client_info ;

//2.设置默认的客户端编码方式utf8

$mysqli->set_charset('utf8');

//3.执行sql查询
$sql=<<<EOF
    CREATE TABLE IF NOT EXISTS mysqli(
    id  TINYINT UNSIGNED AUTO_INCREMENT KEY,
    username VARCHAR(20) NOT NULL
  );
EOF;

$res=$mysqli->query($sql);
var_dump($res);

/*
对于 select desc describe show explain 执行成功返回mysqli_result对象 结果集对象
                                      执行失败返回false
对于其他sql语句                  执行成功返回 true   失败  返回false
*/

//关闭连接
$mysqli->close();

 ?>
