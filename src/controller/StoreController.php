<?php

namespace controller;

class StoreController {

  public function store(): void
  {
    // Communications avec la base de données
    $categories = \model\StoreModel::listCategories();

    // Variables à transmettre à la vue
    $params = array(
      "title" => "Store",
      "module" => "store.php",
      "categories" => $categories
    );

    // Faire le rendu de la vue "src/view/Template.php"
    \view\Template::render($params);
  }

}