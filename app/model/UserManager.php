<?php

require_once ("Manager.php");//Pour se connecter à la base de données

class UserManager extends Manager
{
    
    public function connect ($pseudo, $password) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM user WHERE pseudo = :pseudo AND password = :password');
        $req->execute(array(
            'pseudo' => $pseudo,
            'password' => $pass_hache));
        return $result = $req->fetch();
        
    }
    
    
}
