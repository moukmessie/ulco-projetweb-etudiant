<?php

namespace model;

class Model {

  static function connect()
  {
    $dsn = "mysql:host=localhost;dbname=webstore";
    $user = "root";
    $pass = "";
    return new \PDO($dsn, $user, $pass);
  }

}