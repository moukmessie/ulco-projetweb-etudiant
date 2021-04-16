<?php

namespace controller;

use http\Exception\UnexpectedValueException;
use mysql_xdevapi\Exception;

class StoreController {

  public function store(): void
  {
    // Communications avec la base de données
    $categories = \model\StoreModel::listCategories();
      $products= \model\StoreModel:: listProducts();

    // Variables à transmettre à la vue
    $params = array(
      "title" => "Store",
      "module" => "store.php",
      "categories" => $categories,
        "products" => $products
    );

// Faire le rendu de la vue "src/view/Template.php"
      \view\Template::render($params);

  }
  public function product(int $id):void
  {
      $product = \model\StoreModel::infoProduct($id);
      $comment=\model\CommentModel::listComment($id);

      if( $product!=null){
          $params = array(
              "title" => "Info product",
              "module" => "product.php",
              "product" => $product,
              "comment"=>$comment
          );
          //  rendu du Template avec le module"
          \view\Template::render($params);
      }
      header("Location: /store");
      exit();
  }

  public function search(){
    $word=[]; $order=[]; $category=[];

      if (isset($_POST['search']) && !empty($_POST['search'])) {
          $word = htmlspecialchars($_POST['search']);
      }
      if (isset($_POST['order']) && !empty($_POST['order'])) {
          $order = htmlspecialchars($_POST['order']);
      }
      if (isset($_POST['category']) && !empty($_POST['category'])) {
          $category = htmlspecialchars($_POST['category']);
      }

     //var_dump($word);
      $categories = \model\StoreModel::listCategories();
     $result = \model\StoreModel::search($word);

     $params = array(
          "title" => "Info product",
          "module" => "store.php",
          "categories" => $categories,
          "result"=>$result
      );

      //  rendu du Template avec le module"
   \view\Template::render($params);

  }

}