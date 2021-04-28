<?php


namespace controller;


class CartController
{
    public function cart(){
        if (!empty($_SESSION['login'])) {
            $id=$_SESSION['login']['id'];
            // Variables à transmettre à la vue
            $cart=\model\CartModel::listcart($id);

            $params = [
                "title" => "Cart",
                "module" => "cart.php",
                "cart"=>$cart
            ];

            // Faire le rendu de la vue "src/view/Template.php"
            \view\Template::render($params);
        }else{
            header("Location: /store");
        }
    }

    public function add(int $id_product){
        if (!empty($_SESSION['login'])) {
            if (!empty($_SESSION['login'])) {

                $quantity = intval($_POST['quantity']);
                $id_account = $_SESSION['login']['id'];
                $product_name = $_POST['product_name'];
                $price = intval($_POST['price']);

                //TOTAL AMOUNT
                $total_amount = ($price * $quantity);
                //var_dump($quantity,$id_product,$id_account,$product_name,$price,$total_amount);
                $product = \model\CartModel::add($quantity, $id_product, $id_account, $product_name, $price, $total_amount);
                header("Location: /store/$id_product?status=add_success");
                //var_dump($product);

            }
        }else{
            header("Location: /store");
        }

    }

    public function delete(){
        if (!empty($_POST['id_cart'])) {
            $id= htmlspecialchars($_POST['id_cart']);
        }

      if( \model\CartModel::deleteProduct($id)) {
          header("Location: /cart?status=delete");
      }

    }

    public function updateQuantity(){

    if (isset($_POST['cartId']) and isset($_POST['cartQuantity'])and isset($_SESSION['login']['id']) and isset($_POST['cartPrice'])) {
        $id_product = intval($_POST['cartId']);
        $quantity = intval($_POST['cartQuantity']);
        $id_account = intval($_SESSION['login']['id']);
        $price = intval($_POST['cartPrice']);
        //TOTAL AMOUNT
        $total_amount = ($price * $quantity);
    }

        // var_dump($id_product,$quantity,$id_account,$total_amount);

       $update= \model\CartModel::updateQuantity($id_product,$quantity,$id_account,$total_amount);

       header("Location: /cart?status=update");

    }

    public function payment(){
      //  if (!empty($_SESSION['login'])) {

            $params = [
                "title" => "payment",
                "module" => "payment.php",

            ];

            // Faire le rendu de la vue "src/view/Template.php"
            \view\Template::render($params);
       /* }else{
            header("Location: /store");
        }*/
    }


}