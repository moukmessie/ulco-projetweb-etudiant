<?php


namespace model;


class CartModel
{
    static function add( $quantity, $id_product, $id_account,$product_name,$price, $total_amount){
        //connexion to database
        $db = \model\Model::connect();

        $sql = "SELECT * FROM cart WHERE `id_product`=$id_product";
        $req = $db->prepare($sql);
        $req->execute();
        $response=$req->fetch();
        if ($response != null) {
            $sql= "UPDATE cart SET quantity_prod=$quantity, total_amount=$total_amount WHERE id_account =$id_account";
            $request= $db->prepare($sql);
            $request->execute(compact('quantity','id_product','id_account','product_name', 'price', 'total_amount'));
        }else {//add sql request
            $sql = "INSERT INTO cart (quantity_prod, id_product, id_account, product_name, price, total_amount) VALUES (:quantity, :id_product, :id_account, :product_name, :price, :total_amount)";        //Execution sql request
            $request = $db->prepare($sql);
            $request->execute(compact('quantity', 'id_product', 'id_account', 'product_name', 'price', 'total_amount'));
        }

    }
    static function listcart($id_account){
        //connexion to database
        $db = \model\Model::connect();

        //select sql request
       $sql= "SELECT cart.product_name,cart.quantity_prod, cart.price, cart.total_amount, product.image, category.name FROM  cart INNER JOIN product ON cart.id_product = product.id INNER JOIN category ON product.category = category.id WHERE cart.id_account= :id_account";
        //Execution sql request
        $request= $db->prepare($sql);
        $request->execute(['id_account'=>$id_account]);
        return $request->fetchAll();
    }

    static function deleteProduct($id):bool
    {
        //connexion to database
        $db = \model\Model::connect();

        //add sql request
       // $sql= "SELECT account.firstname, account.lastname, comment.content, comment.date FROM  comment INNER JOIN account ON comment.id_account = account.id WHERE id_product= :id_product";
        //Execution sql request
        $request= $db->prepare($sql);
        $request->execute(['id_product'=>$id_product]);
        return $request->fetchAll();

    }

    static function udapteQuantity($id,$quantity){

    }

}