<?php



/**
file log.class.php
作用：记录信息到日志

开发思路：给定内容，写入文件。
如果文件大了，大于1M，重写写一份。

传给我一个内容，判断当前日志的大小，如果大于1M，则备份，否则 写入。
**/

class Log{

  const LOGFILE = 'curr.log';//建一个常量，代表日志文件的名称


  //写日志
  public static function write($cont){
    $cont .= "\r\n";
    //判断是否备份
    $log = self::isBak();//计算出日志文件的地址

    $fh = fopen($log,'ab');
      fwrite($fh,$cont);
      fclose($fh);

  }
  //备份日志
  public static function bak(){
    //就是把原来的文件，改个名字，存起来
    //改成年月日.bak的形式
    $log = ROOT.'data/log/'.self::LOGFILE;
    $bak = ROOT.'data/log/'. date('ymd').mt_rand(10000,99999).'.bak';
    return rename($log,$bak);
  }
  //读取并判断日志的大小
  public static function isBak(){
    $log = ROOT.'data/log/'.self::LOGFILE;
    if (!file_exists($log)) { //如果文件不存在，则创建
      touch($log);
      return $log;
    } else {
      $size = filesize($log);
      if ($size < 1024 * 1024) {
        return $log;
      }

      if(!self::bak()){
        return $log;
      } else {
        touch($log);
        return $log;
      }
    }

  }
}




 ?>
