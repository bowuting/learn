<?php

class mysql{
  public $conn = NULL;
  public function __construct(){
      $this->conn = mysql_connect('localhost','root','roote');
  }
}

$mysql = new mysql();
if($mysql->conn){
  echo "ok";
}





 ?>
