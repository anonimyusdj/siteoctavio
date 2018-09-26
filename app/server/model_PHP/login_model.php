<?php
require_once "../php/requires.php";
class Login{
  private $pdo;

  public function __construct(){
    $this->pdo=Database::_conectar();
  }
}