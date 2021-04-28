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

  static function listProducts():array
  {
      // Connexion à la base de données
      $db = \model\Model::connect();

      //Requete Sql
      $sql = "SELECT p.id, p.name, p.price, p.image, c.name AS `category_name` FROM `product` AS p INNER JOIN `category` as c ON (p.category = c.id)";

      //Exécution de la requete
      $request = $db->prepare($sql);
      $request->execute();

      //Retourne les resultat dans un array
      return $request->fetchAll();


  }
  static function infoProduct(int $id){
      // Connexion à la base de données
      $db = \model\Model::connect();

      //Requete Sql
      $sql= "SELECT p.id, p.name, p.price, p.image,p.image_alt1,p.image_alt2,p.image_alt3, p.spec,c.name AS category_name FROM product AS p INNER JOIN category as c ON (p.category = c.id) WHERE p.id =?";
      //Exécution de la requete
      $request = $db->prepare($sql);
      $request->execute(['id'=>$id]);

      //Retourne les resultat dans un array
      return $request->fetch();

  }

  static function search($word,$category,$order)
  {
      // Connexion à la base de données
      $db = \model\Model::connect();

      //Requete Sql
     $sql = "SELECT p.id, p.name, p.price, p.image, c.name AS `category_name` FROM `product` AS p INNER JOIN `category` as c ON (p.category = c.id)  ";
      // $sql = "SELECT p.id, p.name, p.price, p.image, c.name AS `category_name` FROM `product` AS p INNER JOIN `category` as c ON (p.category = c.id)";

      if ($word!=null){
          $sql.='WHERE p.name LIKE "%' . $word .'%"';
      }
        $nb=1;
      if($category !=null){
            $sql.='AND(';
          foreach ($category as $c){
              $sql .= ' c.name LIKE "' . $c . '"';
             if (count($category)>$nb) {
                 $sql .='OR';
              }
             $nb++;
          }
          $sql.=')';

      }
      if ($order!=null){
          if ($order=='desc'){
              $sql.='ORDER BY p.price DESC';
          }
          if ($order==="asc") {
              $sql .= 'ORDER BY p.price ASC';
          }
      }

      //Exécution de la requete
      $request = $db->prepare($sql);
      $request->execute();

      //Retourne les resultat dans un array
      return $request->fetchAll();
}

}