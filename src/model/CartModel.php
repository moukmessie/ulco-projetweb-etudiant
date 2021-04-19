<?php


namespace model;


class CartModel
{
    static function add($quantity,$id_product,$id_account){
        //connexion to database
        $db = \model\Model::connect();

        //add sql request
        $sql= "INSERT INTO cart (quantity_prod,id_product, id_account) VALUES (:quantity, :id_product, :id_account)";        //Execution sql request
        $request= $db->prepare($sql);
        $request->execute(compact('quantity','id_product','id_account'));

    }
    static function listcart(){
        //connexion to database
        $db = \model\Model::connect();

        //add sql request
        //$sql= "SELECT account.firstname, account.lastname, comment.content, comment.date FROM  comment INNER JOIN account ON comment.id_account = account.id WHERE id_product= :id_product";
        //Execution sql request
        $request= $db->prepare($sql);
        $request->execute(['id_product'=>$id_product]);
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