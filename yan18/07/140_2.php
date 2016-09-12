<?php


$fh = fopen('score.csv','rb');
$arr = array();


$db = new mysqli('localhost','root','root','test');
if ($db->connect_errno) {
      echo "problem<br />";
    } else {
      echo "good<br />";
      while(!feof($fh))
      {
        $arr = fgetcsv($fh); //fgets每次读一行~ 然后explode拆分成数组
        //echo $str;
        print_r($arr);
        //$arr = explode(',',$str);
      //  print_r($arr);
      //  echo $arr[0],'<br />';
      //  echo $arr[1],'<br />';
      $query = "insert into score  values ( '".$arr[0]."',".$arr[1].")";
      //echo $query;
      $db->query($query);
      }
    }

 ?>
