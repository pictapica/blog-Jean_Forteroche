<?php

require_once ("model/Manager.php");//Pour se connecter à la base de données

class UserManager extends Manager
{
    /**
     * 
     * @param type $user
     * 
     */
    public function addUser ($user)
    {   
        
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO user (firstname, name, pseudo, email, password) VALUES (:firstname, :name, :pseudo, :email, :password)');
         $req->execute(array(
             'firstname'=>$user->getFisrtNAme(),
             'name'=>$user->getName(),
             'pseudo'=>$user->getPseudo(),
             'email'=>$user->getEmail(),
             'password'=> hash("sha512", $user->getPassword()),
             
             ));
         
          $user->hydrate([
              'user_id' =>$this->dbConnect()->lastInsertId()
          ]);
    }
    /**
     * 
     * @param type $pseudo
     * @param type $password
     * @return type
     */
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
