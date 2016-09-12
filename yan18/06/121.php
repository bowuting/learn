<?php

echo "测试";

?>

 <style media="screen">
     table{
         border-collapse:collapse;
         text-align:center;
     }
     td{
         border: 1px solid blue;
         width: 100px;
         height: 40px;
         text-align:center;
       }
</style>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <tr>
            <td>    </td>
            <td>类外</td>
            <td>子类</td>
            <td>类内</td>
      </tr>
      <tr>
            <td>public</td>
            <td>可以</td>
            <td>可以</td>
            <td>可以</td>
      </tr>
      <tr>
            <td>protected</td>
            <td>不可以</td>
            <td>可以</td>
            <td>可以</td>
      </tr>
      <tr>
            <td>private</td>
            <td>不可以</td>
            <td>不可以</td>
            <td>可以</td>
      </tr>
    </table>
  </body>
</html>
