<?php

namespace model;

class AccountModel
{
    static function check($firstname, $lastname, $mail, $password): bool
    {

        if(strlen($firstname)>=2 &&  strlen($lastname)>=2  && filter_var($mail, FILTER_VALIDATE_EMAIL) && (strlen($password) >= 6)) {
            $db = \model\Model::connect();
            $sql = "SELECT * FROM account WHERE `mail`='$mail'";
            $req = $db->prepare($sql);
            $req->execute();
            $response=$req->fetch();
            if (!$response) {
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
            $sql= "INSERT INTO account (firstname,lastname,mail,password) VALUES ( ?, ?, ?, ?)";

            //Execution sql request
            $request= $db->prepare($sql);
            $request->execute(array($firstname, $lastname, $mail, $pass));

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

    static function update($firstname, $lastname, $mail,$id){
        //connexion to database
        $db = \model\Model::connect();
        //update sql request
        $sql= "UPDATE account SET account.firstname='$firstname',account.lastname='$lastname', account.mail='$mail' WHERE id =$id ";
        $request = $db->prepare($sql);
        $request->execute();
    }
}