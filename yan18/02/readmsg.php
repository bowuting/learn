<?php

  $tid = $_GET['tid'];

  $fh = fopen('./msg.txt','r');
  $i = 1;

    while ($row = fgetcsv($fh)) {
      if($tid == $i)
      {
        echo '<h1>',$row[0],'<h1>';
        echo '<p>', $row[1],'<p>';
        echo "<br/>";
      }
      $i = $i + 1;
    }
 ?>
