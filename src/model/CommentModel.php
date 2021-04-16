<?php


namespace model;


class CommentModel
{
    static function insertComment(string $content,int $id_product,int $id_account){
       // echo "content";
        //connexion to database
        $db = \model\Model::connect();

        //add sql request
        $sql= "INSERT INTO comment (content, date, id_product, id_account) VALUES (:content, NOW(), :id_product, :id_account)";        //Execution sql request
        $request= $db->prepare($sql);
        $request->execute(compact('content','id_product','id_account'));
    }

    static function listComment(int $id_product):array
    {
        //connexion to database
        $db = \model\Model::connect();

        //add sql request
        $sql= "SELECT account.firstname, account.lastname, comment.content, comment.date FROM  comment INNER JOIN account ON comment.id_account = account.id WHERE id_product= :id_product";
        //Execution sql request
        $request= $db->prepare($sql);
        $request->execute(['id_product'=>$id_product]);
        return $request->fetchAll();

    }

}