<?php


namespace controller;


class CartController
{
    public function cart():void
    {
        if (!empty($_SESSION['login'])) {
            $id=$_SESSION['login']['id'];
            // Variables à transmettre à la vue
            $cart=\model\CartModel::listcart($id);
            $_SESSION['cartContent']=count($cart);
            $_SESSION['cart']=$cart;
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

    public function add(int $id_product):void
    {
            if (!empty($_SESSION['login'])) {

                $quantity = (int)$_POST['quantity'];
                $id_account = $_SESSION['login']['id'];
                $product_name = $_POST['product_name'];
                $price = (int)$_POST['price'];

                $cart=\model\CartModel::listcart($id_account);

                //TOTAL AMOUNT
                $total_amount = ($price * $quantity);
                    \model\CartModel::add($quantity, $id_product, $id_account, $product_name, $price, $total_amount);
                    header("Location: /store/$id_product?status=add_success");

            }else{
                header("Location: /store/".$id_product."?status=login_please");
            }

    }
    public function updateQuantity():void
    {
        if (isset($_POST['cartId'], $_POST['cartQuantity'], $_SESSION['login']['id'], $_POST['cartPrice'])) {
            $id_product = (int)$_POST['cartId'];
            $quantity = (int)$_POST['cartQuantity'];
            $id_account = (int)$_SESSION['login']['id'];
            $price = (int)$_POST['cartPrice'];
            //TOTAL AMOUNT
            $total_amount = ($price * $quantity);
        }
        \model\CartModel::updateQuantity($id_product,$quantity,$id_account,$total_amount);
        header("Location: /cart?status=update");

    }

    public function delete():void
    {
        if (!empty($_POST['id_cart'])) {
            $id= htmlspecialchars($_POST['id_cart']);
            \model\CartModel::deleteProduct($id);
          header("Location: /cart?status=delete");
      }

    }

    public function payment(){
     if (!empty($_SESSION['login'])) {

            $params = [
                "title" => "payment",
                "module" => "payment.php",

            ];

            // Faire le rendu de la vue "src/view/Template.php"
            \view\Template::render($params);
        }else{
            header("Location: /store");
        }
    }


}