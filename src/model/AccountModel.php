<?php

namespace model;

class AccountModel
{
    static function check($firstname, $lastname, $mail, $password): bool
    {

        if (strlen($firstname)>=2 && strlen($lastname )>=2 && filter_var($mail,FILTER_VALIDATE_EMAIL) && strlen($password)>=6){
            //connexion to database
            $db = \model\Model::connect();
            //search sql request
            $sql= "SELECT '$mail' FROM account";
            //Execution sql request
            $request= $db->prepare($sql);
            $request->execute();
           if ($request->fetchAll()== null){
                return true;
            }
        }
        return false;
    }

    static function signin($firstname, $lastname, $mail, $password):bool
    {
        if(self::check($firstname, $lastname, $mail, $password)){

            //connexion to database
            $db = \model\Model::connect();
           $pass= password_hash($password,PASSWORD_DEFAULT);
            //add sql request
            $sql= "INSERT INTO account (id,firstname,lastname,mail,password) VALUES ('','$firstname','$lastname','$mail','$pass')";

            //Execution sql request
            $request= $db->prepare($sql);
            $request->execute();

            return true;
        }

        return false;
    }

    static function login($mail, $password)
    {

        //connexion to database
        $db = \model\Model::connect();

        //add sql request
        $sql= "SELECT * FROM account WHERE account.mail='$mail' ";
        $request = $db->prepare($sql);
        $request->execute(['mail'=>$mail,'password'=>$password]);

        return $request->fetch();

    }
}