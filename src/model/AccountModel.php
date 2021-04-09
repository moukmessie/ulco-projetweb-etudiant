<?php

namespace model;

class AccountModel
{
    static function check($firstname, $lastname, $mail, $password): bool
    {

        if (strlen($firstname)>=2 and strlen($lastname )>=2 and filter_var($mail,FILTER_VALIDATE_EMAIL) and strlen($password)>=6){
            return true;
        }
        return false;
    }

    static function signin($firstname, $lastname, $mail, $password):bool
    {
        if(self::check($firstname, $lastname, $mail, $password)){

            //connexion to database
            $db = \model\Model::connect();
           $password= password_hash($password);
            //add sql request
            $sql= "INSERT INTO account (id,firstname,lastname,mail,password) VALUES ('','$firstname','$lastname','$mail','$password')";

            //Execution sql request
            $request= $db->prepare($sql);
            $request->execute(array($firstname, $lastname, $mail, $password));
            return true;
        }

        return false;
    }

    static function login($mail, $password):array
    {

        //connexion to database
        $db = \model\Model::connect();

        //add sql request
        $sql= "SELECT * FROM account WHERE account.mail='$mail' AND , password_verfy($password,'account.password')";
        $request = $db->prepare($sql);
        $request->execute();

        return $request->fetchAll();
    }
}