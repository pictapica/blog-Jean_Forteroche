<?php

// On appelle la classe permettant la connexion à la BDD
require_once ("model/Manager.php");

class PostManager extends Manager {

    // Méthode pour récupérer tous les billets
    public function getPosts() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, author, left(content, 250) as extrait, content, picture, DATE_FORMAT(date, \'Le %d/%m/%Y à %Hh%i\') '
                . ' AS date_fr FROM posts ORDER BY date DESC LIMIT 0, 3') or die('Impossible d\'effectuer la requête');

        return $req;
    }

    // Méthode pour récupérer les informations liées à un billet
    public function getPostbyId($postId) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, author, content, ' .
                'DATE_FORMAT(date, \'Le %d/%m/%Y à %Hh%i\') AS date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    // Méthode permettant la création d'un billet
    public function createPost() {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts (title, author, content, creation_date) VALUES (?, ?, ?, NOW()) ');
        $req->execute(array($title, $author, $content));
    }

    // Méthode permettant la lecture d'un billet
    public function readPost() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, author, content, DATE_FORMAT(date, \'Le %d/%m/%Y à %Hh%i\') '
                . ' AS date_fr FROM posts ORDER BY date DESC LIMIT 0, 3');

        return $req;
    }

    // Méthode permettant la suppresion d'un billet
    public function deletePost() {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE * FROM posts WHERE id = ?');
        $req->execute(array(id));
        header('location:index.php');
    }

// Méthode permettant la mise à jour d'un billet
    public function updatePost() {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE title, author, content FROM posts');
        return $req;
    }

}
