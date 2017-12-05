<?php

require_once ("model/Manager.php");//Pour se connecter à la base de données

class UserManager extends Manager
{
    public function addUser ($user)
    {   $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO user (firstname, name, pseudo, email, password) VALUES (:firstname, :name, :pseudo, :email, :password)');
         $req->execute(array(
             'firstname'=>$firstname,
             'name'=>$name,
             'pseudo'=>$pseudo,
             'email'=>$email,
             'password'=> hash("sha512", $password),
             
             ));
         
          $user->hydrate([
              'user_id' =>$this->dbConnect()->lastInsertId()
          ]);
    }
    
    public function connect ($pseudo, $password) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id FROM user WHERE pseudo = :pseudo AND password = :password');
        $req->execute(array(
            'pseudo' => $pseudo,
            'password' => hash ("sha512", $password),  
        ));
        return $resultat = $req->fetch();
    }
}
