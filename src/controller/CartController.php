<?php


namespace controller;


class CartController
{
    public function cart(){
        if (!empty($_SESSION['login'])) {
            // Variables à transmettre à la vue
            $params = [
                "title" => "Cart",
                "module" => "cart.php"
            ];

            // Faire le rendu de la vue "src/view/Template.php"
            \view\Template::render($params);
        }else{
            header("Location: /store");
        }
    }

    public function add(int $id_product){
       // $quantity=null;
        if (!empty($_SESSION['login'])) {
            $quantity=$_POST['quantity'];
            $id_account=$_SESSION['login']['id'];
           var_dump($quantity);

           //$product=\model\CartModel::add($quantity,$id_product,$id_account);
          //var_dump($product);

        }

    }

}