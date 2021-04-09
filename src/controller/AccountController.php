<?php


namespace controller;


class AccountController
{
    public function account(): void{
        // Variables à transmettre à la vue
        $params = [
            "title"  => "Account",
            "module" => "account.php"
        ];

        // Faire le rendu de la vue "src/view/Template.php"
        \view\Template::render($params);
    }

   public function signin(){
        //forms signin

        $lastsname = trim(htmlspecialchars($_POST['userlastname']));
        $firstsname = trim(htmlspecialchars($_POST['userfirstname']));
        $mail = trim(htmlspecialchars($_POST['usermail']));
        $password = trim(htmlspecialchars($_POST['userpass']));

        $signin = \model\AccountModel::signin($firstsname, $lastsname, $mail, $password);

            if ($signin) {
                header("Location: /account");
                exit();
            }

    }

   public function login():void
   {

        $mail=trim(htmlspecialchars($_POST['usermail']));
       $password =trim(htmlspecialchars($_POST['userpass']));

        $login=\model\AccountModel::login($mail,$password);



       var_dump( password_verify($password,$login['password']));

      /*  if($login !=null ){
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
            header("Location: /account");
            exit();

        }*/

   }

}