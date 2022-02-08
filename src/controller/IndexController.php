<?php

namespace controller;

class IndexController {

  public function index(): void
  {
     if (!empty($_SESSION['login'])) {
            $id=$_SESSION['login']['id'];
            // Variables à transmettre à la vue
            $cart=\model\CartModel::listcart($id);
            $_SESSION['cartContent']=count($cart);
     }
    // Variables à transmettre à la vue
    $params = [
      "title"  => "Home",
      "module" => "home.php"
    ];

    // Faire le rendu de la vue "src/view/Template.php"
    \view\Template::render($params);
  }

}