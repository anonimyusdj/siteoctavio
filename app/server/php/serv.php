<?php
  require_once "conf.php";

  class Database{
    public static function _conectar(){
      $pdo=new PDO("mysql:host=".HOST.";dbname=".DBNAME.";port=".DBPORT.";charset=".DBCHARSET,DBUSER,DBPASS);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    }
  }
?>
