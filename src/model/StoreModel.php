<?php

namespace model;

class StoreModel {

  static function listCategories(): array
  {
    // Connexion à la base de données
    $db = \model\Model::connect();

    // Requête SQL
    $sql = "SELECT id, name FROM category";
    
    // Exécution de la requête
    $req = $db->prepare($sql);
    $req->execute();

    // Retourner les résultats (type array)
    return $req->fetchAll();
  }

}