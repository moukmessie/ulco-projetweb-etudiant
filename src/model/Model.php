<?php

namespace model;

class Model {

  static function connect()
  {
    $dsn = "mysql: localhost;dbname=webstore;charset=UTF8";
    $user = "root";
    $pass = "";
    return new \PDO($dsn, $user, $pass);

      /*$dsn = "mysql:host=sql4.freesqldatabase.com;dbname=sql4408981;charset=UTF8";
      $user = "sql4408981";
      $pass = "wUy6ckkQ1n";
      return new \PDO($dsn, $user, $pass);*/
  }



}