<?php


namespace controller;


class CommentController
{
   public function postComment(int $id_product){
       $logger= isset($_SESSION['login']);
       $content = htmlspecialchars($_POST['comment']);
      $id_account = $_SESSION['login']['id'];
      var_dump($content);
      $comment = \model\CommentModel::insertComment($content,$id_product,$id_account);



      if ($comment){
           header("Location: /store/$id_product");
       }

   }

}