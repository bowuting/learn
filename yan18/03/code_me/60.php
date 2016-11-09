<meta charset="utf-8">
<?php

//开始留言
//连接MySQL
//先建表：

/*
create table liuyan(
 id int auto_increment primary key,
 title varchar(200),
 content varchar(200),
 pubtime int
 ) charset utf8;
*/

//开始连接：
$conn = mysql_connect('localhost','root','root');
if($conn !== false)
  echo "nice","<br>";

mysql_query('use test',$conn);
mysql_query('set nemes utf8',$conn);

$sql = "insert into liuyan(title,content,pubtime) values(' " . $_POST['title'] ." ',' " . $_POST['content'] . "'," . time() . ")";

echo $sql,"<br>";

if(mysql_query($sql,$conn))
{
    echo "留言成功";
}else{
    echo "留言失败";
}

 ?>
