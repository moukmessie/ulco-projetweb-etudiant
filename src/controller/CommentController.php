<?php


namespace controller;


class CommentController
{
   public function postComment(int $id_product){
       $content =null;
       $id_account =null;
       $date = date("d - m - Y");
        if (!empty($_SESSION['login'])) {
             if (!empty($_POST['comment']) and !empty($_SESSION['login']) ) {
          $content= htmlspecialchars($_POST['comment']);
           $id_account = $_SESSION['login']['id'];
       }
   

       \model\CommentModel::insertComment($content,$id_product,$id_account,$date);
      // var_dump($content,$id_account,$id_product);

           header("Location: /store/$id_product?status=comment_posted");
           exit();

        }
  
     
   }

}