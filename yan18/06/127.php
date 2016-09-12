<?php
class UserModel{
  protected  $email = 'user@126.com';
  protected  $date = array();

  public function __set($k,$v){
    $this->data[$k] = $v;
  }
  //public function __get($p){
  //  return $this->data[$p];
  //}

  public function __unset($p){
    unset($this->data[$p]);
  }
  public function __isset($p){
    return isset($this->data[$p]);
  }


  public function add(){
    $sql  = 'insert into table table_name (';
    $sql .= implode(',',array_keys($this->data));
    $sql .= ") values ('";
    $sql .= implode("','",array_values($this->data));
    $sql .= "')";
    return $sql;
  }
}


$user = new UserModel();
print_r($user);


$user->email = 'bowuting@gmail.com';
$user->name  = 'bowu';
print_r($user);

//echo $user->add(),'<br />';

unset($user->email);
print_r($user);








?>
