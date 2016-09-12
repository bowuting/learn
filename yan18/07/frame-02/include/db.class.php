<?php

//file : db.class.php
abstract class db{
  public abstract function connetc($h,$u,$p);
  public abstract function query($sql);
  public abstract function getAll($sql);
  public abstract function getRow($sql);
  public abstract function getOne($sql);
  public abstract function autoExcute($stable,$data,$cat='insert',$where);


}

 ?>
