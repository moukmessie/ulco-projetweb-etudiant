<?php

namespace model;

class Model {

  static function connect()
  {
    $dsn = "mysql:host=sql4.freesqldatabase.com;dbname=webstore;charset=UTF8";
    $user = "sql4408981";
    $pass = "wUy6ckkQ1n";
    return new \PDO($dsn, $user, $pass);
  }

}