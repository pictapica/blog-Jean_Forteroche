<?php

require_once ("Manager.php"); //Pour se connecter à la base de données
require_once ("user.php");

class UserManager extends Manager {

    public function addUser($firstname, $name, $pseudo, $email,$pwdsecure) {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO user (firstname, name, pseudo, email, password) VALUES(:firstname,
 :name, :pseudo, :email, :password)');
        $req->execute(array(
            'firstname' => $firstname,
            'name' => $name,
            'pseudo' => $pseudo,
            'email' => $email,
            'password' => $pwdsecure));
        $req->execute();
    }

//quand l'inscription sera prête on pourra alors avoir un mot de passe haché)
    public function connect($pseudo, $securepass) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM user WHERE pseudo = :pseudo AND password = :password');
        $req->execute(array(
            'pseudo' => $pseudo,
            'password' => $securepass));
        return $result = $req->fetch();
    }

}
