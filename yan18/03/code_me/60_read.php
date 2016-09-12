<?php

$conn = mysql_connect('localhost','root','root');
//if($conn !== false)
//  echo "nice";

mysql_query('use test',$conn);
//mysql_query('set nemes utf-8',$conn);


$sql = 'select * from liuyan';
$rs = mysql_query($sql,$conn);

while($row = mysql_fetch_assoc($rs)){
//  print_r($row);

//只看标题
// echo '<li>',$row['title'],'</li>';

  echo '<li><a href="60_du.php?id=',$row[id],'">',$row['title'],'</li>';

}

?>
