<?php


namespace controller;


class AccountController
{
    public function account(): void{
        if (empty($_SESSION['login'])) {
            // Variables à transmettre à la vue
            $params = [
                "title" => "Account",
                "module" => "account.php"
            ];

            // Faire le rendu de la vue "src/view/Template.php"
            \view\Template::render($params);
        }else{
            header("Location: /account/infos");
        }
    }

   public function signin(){
        //forms signin

        $lastsname = trim(htmlspecialchars($_POST['userlastname']));
        $firstsname = trim(htmlspecialchars($_POST['userfirstname']));
        $mail = trim(htmlspecialchars($_POST['usermail']));
        $password = trim(htmlspecialchars($_POST['userpass']));

        $signin = \model\AccountModel::signin($firstsname, $lastsname, $mail, $password);
      //var_dump($signin);
           if ($signin) {
                header("Location: /account?status=signin_success");

            }else{
                header("Location: /account?status=signin_fail");
            }

    }

   public function login():void
   {

        $mail=trim(htmlspecialchars($_POST['usermail']));
       $password =trim(htmlspecialchars($_POST['userpass']));

        $login=\model\AccountModel::login($mail,$password);

       password_verify($password,$login['password']);
       //var_dump( password_verify($password,$login['password']));

       if($login !=false && password_verify($password,$login['password'])){
            $user=array(
                "id"=>$login['id'],
                "lastname"=>$login['lastname'],
                "firstname"=>$login['firstname'],
                'mail'=>$login['mail'],
            );
            $_SESSION['login']=$user;
            header("Location: /store");
            exit();
        }else{

            header("Location: /account?status=login_fail");

        }

   }

   public function logout(){
        session_destroy();
        header("Location: /account?status=logout_success");

   }

   public function infos(){
       if (!empty($_SESSION['login'])) {// Variables à transmettre à la vue
           $params = [
               "title" => "Info",
               "module" => "infos.php"
           ];

           // Faire le rendu de la vue "src/view/Template.php"
           \view\Template::render($params);
       }else{
           header("Location: /store");
           exit();
       }

   }

   public function update(){
       if (!empty($_SESSION['login'])) {
           $id = $_SESSION['login']['id'];

           $firstname = !empty(($_POST['firstname']))? htmlspecialchars($_POST['firstname']) : $_SESSION['login']['firstname'];
           $lastname  = !empty(($_POST['lastname']))? htmlspecialchars($_POST['lastname']) : $_SESSION['login']['lastname'];
           $mail = !empty(($_POST['mail']))? htmlspecialchars($_POST['mail']) : $_SESSION['login']['mail'];

          /* $lastname = htmlspecialchars($_POST['lastname']);
               $mail = htmlspecialchars($_POST['mail']);*/

        $updated=\model\AccountModel::update($firstname,$lastname,$mail,$id);
            $_SESSION['login']['firstname']=$firstname;
            $_SESSION['login']['lastname']=$lastname;
            $_SESSION['login']['mail']=$mail;
            header("Location: /account/infos?status=ok");
        }
   }


}