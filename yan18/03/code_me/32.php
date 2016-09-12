<?php

$var = 20;


$str1 = <<<EOD
  he is $var years old.
EOD;

$str2 = <<<'EOD'
  he is $var years old.
EOD;


echo "heredoc",$str1,'相当于双引号','<br>';

echo "nowdoc",$str2,'相当于单引号','<br>';


 ?>
