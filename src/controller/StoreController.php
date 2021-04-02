<?php

namespace controller;

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


           //  if (mysql_num_rows($product)!==0) {
                  // Variables à transmettre à la vue
                 $params = array(
                      "title" => "Store",
                      "module" => "product.php",
                      "product" => $product
                  );


                  //  rendu du Template avec le module"
                  \view\Template::render($params);

            //  } else {
          //    header("Location: /store");
          //    exit();
        //    }


  }

}