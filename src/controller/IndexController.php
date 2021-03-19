<?php

namespace controller;

class IndexController {

  public function index(): void
  {
    // Variables à transmettre à la vue
    $params = [
      "title"  => "Home",
      "module" => "home.php"
    ];

    // Faire le rendu de la vue "src/view/Template.php"
    \view\Template::render($params);
  }

}