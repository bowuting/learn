<?php


$conn = mysql_connect('localhost','root','root');
//if($conn !== false)
//  echo "nice","<br>";
mysql_query('use test',$conn);
mysql_query('set nemes utf-8',$conn);


$id = $_GET['id'];

$sql = 'select * from liuyan where id=' . $id;


$rs = mysql_query($sql,$conn);

$row = mysql_fetch_assoc($rs);
?>
<h1>  <?php echo $row['title']; ?> </h1>    //注意这里的HTML标签  要放在第一个php标签之外，，，，只能在html里嵌套php  反过来好像不行
<p>   <?php  echo $row['content']; ?></p>
