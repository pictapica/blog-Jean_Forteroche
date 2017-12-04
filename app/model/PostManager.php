<?php

// On appelle la classe permettant la connexion à la BDD
require_once ("../app/model/Manager.php");

class PostManager extends Manager {

    // récupérer tous les billets
    public function getPosts() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, user_id, left(content, 250) as extrait,'
                . ' content, DATE_FORMAT(creation_date, \'Le %d/%m/%Y à %Hh%i\') '
                . ' AS creation_date_fr FROM post ORDER BY creation_date DESC LIMIT 0, 6')
                or die('Impossible d\'effectuer la requête');

        return $req;
    }

    // récupérer les informations liées à un billet
    public function getPost($postId) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, user_id, content, ' .
                'DATE_FORMAT(creation_date, \'Le %d/%m/%Y à %Hh%i\') AS creation_date_fr '
                . 'FROM post WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function getPostbyone() {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM post WHERE id = (SELECT MAX(id) FROM post');
        return $req;
    }

}

/*public function getPostbyone() {
        $db = $this->dbConnect();
       $req = $db->prepare('SELECT id, title, user_id, left(content, 250) as extrait, content
            DATE_FORMAT(creation_date, \'Le %d/%m/%Y à %Hh%i\') '
                . ' AS creation_date_fr FROM post ORDER BY creation_date DESC LIMIT 0,1') 
                 or die('Impossible d\'effectuer la requête');
        
         return $req;
    }
     * 
     */