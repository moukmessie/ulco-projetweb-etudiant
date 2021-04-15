<?php


namespace model;


class CommentModel
{
    static function insertComment($content,$id_product,$id_account){
        //if($_SESSION[''])

        //connexion to database
        $db = \model\Model::connect();
        $today = date('d-m-Y');
        //add sql request
        $sql= "INSERT INTO comment (content,date,id_product,id_account) VALUES ( ?, ?, ?, ?)";

        //Execution sql request
        $request= $db->prepare($sql);
        $request->execute(array($content,$today,$id_product,$id_account));


    }
    static function listComment(){

    }

}