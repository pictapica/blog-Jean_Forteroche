<?php

require_once ("Manager.php"); //Pour se connecter à la base de données
require_once ("user.php");

class UserManager extends Manager {

    public function addUser(User $user) {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO user (user_id, firstname, name, pseudo, email, password) VALUES(:firstname,
 :name, :pseudo, :email, :password)');
        $req->execute(array(
            'user_id' => $user->getUserID(), PDO::PARAM_INT,
            'firstname' => $user->getFirstName(), PDO::PARAM_STR,
            'name' => $user->getName(), PDO::PARAM_STR,
            'pseudo' => $user->getPseudo(), PDO::PARAM_STR,
            'email' => $user->getEmail(), PDO::PARAM_STR,
            'password' => $user->getPassword(), PDO::PARAM_STR
        ));


        $req->execute();

        $user->hydrate([
            'user_id' => $this->$db->lastInsertId()
        ]);
    }

    //On verifie si le pseudo ou l'email  existent dans la bdd  
    public function verifAdd($pseudo, $email) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM user WHERE pseudo = :pseudo OR email=:email');
        $req->execute(array(
            'pseudo' => $pseudo, PDO::PARAM_STR,
            '$email' => $email, PDO::PARAM_STR,));

        return $result = $req->fetch(PDO::FETCH_ASSOC);
    }
//quand l'inscription sera prête on pourra alors avoir un mot de passe haché)
    public function connect($pseudo, $password) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM user WHERE pseudo = :pseudo AND password = :password');
        $req->execute(array(
            'pseudo' => $pseudo,
            'password' => $password));
        return $result = $req->fetch();
    }
 
}
