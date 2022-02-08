<?php

namespace model;

class Model {

  static function connect()
  {
      /*
      //Mysql connexion
      $dsn = "mysql:host=sql4.freesqldatabase.com;dbname=sql4408981;charset=UTF8";
      $user = "sql4408981";
      $pass = "wUy6ckkQ1n";
      return new \PDO($dsn, $user, $pass);*/

      //sqlite connexion
      $dsn ="sqlite:legowebstore.db";
        return new \PDO($dsn);
  }



}