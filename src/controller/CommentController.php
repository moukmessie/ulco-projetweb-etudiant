<?php


namespace controller;


class CommentController
{
   public function postComment(int $id_product){
       $content =null;
       $id_account =null;

       if (!empty($_POST['comment'])) {
          $content= htmlspecialchars($_POST['comment']);
       }
       if (!empty($_SESSION['login'])) {
           $id_account = $_SESSION['login']['id'];
       }

      $comment = \model\CommentModel::insertComment($content,$id_product,$id_account);
      // var_dump($content,$id_account,$id_product);

           header("Location: /store/$id_product");
           exit();

   }

}