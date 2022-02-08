<?php


namespace model;


class CartModel
{
    static function add( $quantity, $id_product, $id_account,$product_name,$price, $total_amount):bool
    {
        //connexion to database
        $db = \model\Model::connect();

        $sql = "SELECT * FROM cart WHERE  id_product='$id_product' AND id_account='$id_account'";
        $req = $db->prepare($sql);
        $req->execute();
        $response=$req->fetch();
        if ($response != null) {
            $quantity=$response['quantity_prod']+$quantity > 5 ? 5 : $response['quantity_prod']+$quantity;
            $total_amount=$response['total_amount']+$total_amount;
            $sql= "UPDATE cart SET quantity_prod= :quantity, total_amount=:total_amount WHERE id_product=:id_product AND id_account =:id_account";
            $request= $db->prepare($sql);
            $request->execute(compact('quantity','total_amount','id_product','id_account'));
            return true;
        }else {//add sql request
            $sql = "INSERT INTO cart (quantity_prod, id_product, id_account, product_name, price, total_amount) VALUES (:quantity, :id_product, :id_account, :product_name, :price, :total_amount)";        //Execution sql request
            $request = $db->prepare($sql);
            $request->execute(compact('quantity', 'id_product', 'id_account', 'product_name', 'price', 'total_amount'));
            return true;
        }
        return false;

    }
    static function listcart($id_account):array
    {
        //connexion to database
        $db = \model\Model::connect();

        //select sql request
       $sql= "SELECT cart.id,cart.product_name,cart.quantity_prod, cart.price, cart.total_amount,cart.id_product, product.image, category.name FROM  cart INNER JOIN product ON cart.id_product = product.id INNER JOIN category ON product.category = category.id WHERE cart.id_account= :id_account";
        //Execution sql request
        $request= $db->prepare($sql);
        $request->execute(['id_account'=>$id_account]);
        return $request->fetchAll();
    }

    static function cart($id_account)
    {
        //connexion to database
        $db = \model\Model::connect();

        //select sql request
        $sql= "SELECT id_product FROM cart WHERE id_account =:id_account";
        //Execution sql request
        $request= $db->prepare($sql);
        $request->execute(compact('id_account'));
        return $request->fetchAll();
    }

    static function deleteProduct($id):bool
    {
        //connexion to database
        $db = \model\Model::connect();

        //add sql request
       $sql= " DELETE FROM cart where id=:id ";
        //Execution sql request
        $request= $db->prepare($sql);
        $request->execute(['id'=>$id]);
         return true;

    }
    static function updateQuantity($id_product,$quantity,$id_account,$total_amount):bool
    {
        //connexion to database
        $db = \model\Model::connect();
        //$sql= "UPDATE cart SET quantity_prod=$quantity ,total_amount=$total_amount  WHERE `id`=$id_product and id_account =$id_account";
        $sql= "UPDATE cart SET quantity_prod=$quantity,total_amount=$total_amount  WHERE `id`=$id_product and id_account =$id_account";
        $request= $db->prepare($sql);
        if ($request->execute()){
            return true;
        }
        return false;
    }

}