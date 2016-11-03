<?php




$cnt = file_get_contents('./res.txt');
$cnt += 1;

file_put_contents('./res.txt',$cnt);


header('HTTP/1.1 204 No Content');

 ?>
