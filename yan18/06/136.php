<?php

//error_reporting(0);

class mysql{
  public $conn = NULL;

  public function __construct(){
    $this->conn = mysqli_connect('localhost','root','r到oot');

    if(!$this->conn){
      //new Exception('错误原因',错误代码);
      $e = new Exception('漏油了',9);

      throw $e;//剖出异常
    }
  }
}
try{ //测试 并捕捉错误信息
  $mysql = new mysql();
} catch(Exception $e){
  echo '捕捉到错误信息:<br />';
  echo $e->getMessage(),'<br />';
  echo '错误代码:',$e->getCode(),'<br />';
  echo '错误文件:',$e->getFile(),'<br />';
  echo '错误行:',$e->getLine(),'<br />';
}
//$mysql = new mysql();
if($mysql->conn){
  echo "ok";
} else {
  echo "no";
}





 ?>
