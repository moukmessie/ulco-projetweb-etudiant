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
      if (!empty($_SESSION['login'])) {
            $id=$_SESSION['login']['id'];
            // Variables à transmettre à la vue
            $cart=\model\CartModel::listcart($id);
            $_SESSION['cartContent']=count($cart);
     }

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

      $id_users=$_SESSION['login']['id'];
      // Variables à transmettre à la vue
      $cart=\model\CartModel::listcart($id_users);
      $_SESSION['cartContent']=count($cart);
    
      $product = \model\StoreModel::infoProduct($id);
      $comment=\model\CommentModel::listComment($id);


      if( $product){
          $params = array(
              "title" => "Info product",
              "module" => "product.php",
              "product" => $product,
              "comment"=>$comment
          );
          //  rendu du Template avec le module"
          \view\Template::render($params);
      }else{
          header("Location: /store");
          exit();
      }


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
          $category = ($_POST['category']);
      }
        //var_dump($order,$category);

      $categories = \model\StoreModel::listCategories();
     $result = \model\StoreModel::search($word,$category,$order);

    $params = array(
          "title" => "Info product",
          "module" => "store.php",
          "categories" => $categories,
          "products"=>$result,

      );

      //  rendu du Template avec le module"
   \view\Template::render($params);

  }

}