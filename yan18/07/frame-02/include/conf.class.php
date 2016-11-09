<?php
class conf{

  protected static $ins = NULL;
  protected $data = array();
  final protected function __construct(){

    //一次性把配置文件信息读过来，
    //这样以后就不再管配置文件了
    //需要配置信息时，直接从$data找
    include(ROOT. 'include/config.inc.php');
    $this->data = $_CFG;

  }
  final protected function __clone(){

  }
  public static function getIns(){
      if(self::$ins instanceof self){
        return self::$ins;
      }else {
        self::$ins = new self();
        return self::$ins;
      }
  }
   public  function getData(){
    print_r($this->data);
  }
  public function __get($key){
    if(array_key_exists($key,$this->data)){
      return $this->data[$key];
    }else {
      return null;
    }
  }


  //用魔术方法在运行期 动态增加或改变配置选项
  public function __set($key,$val){
    $this->data[$key] = $val;
  }
}

//测试
//单例模式
// $conf = conf::getIns();
//
// //读取选项
// echo $conf->host,'<br />';
// echo $conf->user,'<br />';
// echo $conf->passwd,'<br />';
// var_dump($conf->template_dir);
//
// //动态追加
// $conf->template_dir = __DIR__;
// echo $conf->template_dir,'<br />';

 ?>
