<?php

  $path = './';
  $dh = opendir($path);
  if ($dh === false) {
    echo "打开出错";
    exit;
  }

  $list = array();
  while( false !=($item = readdir($dh)) )
  {
    $list[] = $item;
  }

  print_r($list);

  closedir($dh);

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>文件管理系统</title>
    <style media="screen">
      td{
          border: 1px solid blue;
      }
    </style>
  </head>
  <body>
      <h1>文件管理系统</h1>
      <table>
        <tr>
          <td>序号</td>
          <td>文件名 </td>
          <td>操作</td>
        </tr>
          <?php foreach ($list as$k => $v) {
            echo '<tr>';
            echo '<td>',$k,'</td>';
            echo '<td>',$v,'</td>';
            echo '<td>删除</td>';
            echo '</tr>';
        }
        ?>
      </table>
  </body>
</html>
