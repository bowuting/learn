<?php
  $i = 1;
  $fh = fopen('./msg.txt','r');
    while ($row = fgetcsv($fh)) {
      echo '<li> <a href="readmsg.php?tid=',$i,'">' , $row[0] , '</li>';
      echo "<br/>";
      $i+=1;
    }
 ?>
