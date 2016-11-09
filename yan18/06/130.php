<?php

  define('ACC','Deny');

  class Human{
    const Head = 1;
    public static function show(){
      echo ACC,'<br>';
      echo self::Head,'<br />';
    }
  }


  Human::show();
  echo Human::Head;



 ?>
