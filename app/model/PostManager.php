<?php

require_once ("../app/model/Manager.php");

class PostManager extends Manager {

    // récupérer tous les billets
    public function getPosts() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, user_id, left(content, 220) as extrait,'
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
        $post = $req->fetch(PDO::FETCH_ASSOC);

        return $post;
    }

    public function addPost($title, $content) {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO post(title, user_id, content, creation_date) '
                . 'VALUES(:title, 1, :content, NULL, NOW ) ');
        $req->execute(array(
        'title'=> $title,
        'user_id'=> 1,
        'content'=> $content));
 
        $req->execute();
    }

    public function updatePost(post $post, $getId) {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE post SET title = :title, user_id = 1, content=:content,'
                . 'update_date = :update_date WHERE id = ' . $getId);
        $req->execute(array(
       'title'=> $post->getTitle(), PDO::PARAM_STR,
        'content'=>$post->getContent(), PDO::PARAM_STR,
        'update_date'=> $post->getUpdateDate(), PDO::PARAM_STR));

        $req->execute();
    }

    public function deletePost($getId) {
        $db = $this->dbConnect();
        $req = $db->exec('DELETE FROM post WHERE id=' . $getId);
    }

}
