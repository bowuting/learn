<?php

class Mysql
{
  private $host ;
  private $user  ;
  private $passwd   ;
  private $dbName  ;
  private $charset  ;
  private $conn = NULL;

  //连接
    private function connect($h,$u,$p){
    $conn = mysql_connect($h,$u,$p);
    $this->conn = $conn;
  }

  //发送
  public function query($sql) {
    return mysql_query($sql,$this->conn);
  }

  //切换数据库
  public function dbSwitch($dbName){
    $sql = 'use ' . $dbName;
    $this->query($sql);
  }

  //设置字符集
  public function setChar($char){
    $sql = 'set names ' . $char;
    $this->query($sql);
  }

  //获取多行多列的select
  public function getAll($sql){
    $list = array();
    $rs = $this->query($sql);
    if(!$rs){
      return false;
    }
    while ($row = mysql_fetch_assoc($rs)) {
        $list[] = $row;
    }
    return $list;
  }

  //获取单行
  public function getRow($sql){
    $rs = $this->query($sql);
    if(!$rs){
      return false;
    }
    return mysql_fetch_assoc($rs);
  }

  //获取单个值
  public function getOne($sql){
    $rs = $this->query($sql);
    if(!$rs){
      return false;
    }
    $row = mysql_fetch_row($rs);

    return $row[0];
  }
  public function close(){
    mysql_close($this->conn);
  }

    function __construct() {
      //应该是由配置文件读取
      //然后再由文件赋值私有属性
      $this->host = 'localhost';
      $this->user = 'root';
      $this->passwd = 'root';
      $this->dbName = 'test';
      $this->charset = 'utf8';

      //连接
      $this->connect($this->host,$this->user,$this->passwd);

      //切换库
      $this->dbSwitch($this->dbName);

      //设置字符集
      $this->setChar($this->charset);

    }
}



$mysql = new Mysql();
print_r($mysql);

$sql = "insert into account values(10,'b',200)";
if($mysql->query($sql)){
  echo "nice";
} else {
  echo "失败";
}
//$sql = "select * from account";
//print_r($mysql->getAll($sql));
$sql = "select * from account where id = 1";
print_r($mysql->getRow($sql));

$sql = "select count(*) from account";
print_r($mysql->getOne($sql));

$mysql->close();
 ?>
