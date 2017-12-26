<?php

require_once (dirname(__DIR__).'/model/Manager.php');

class PostManager extends Manager {

    // récupérer tous les billets
    public function getPosts() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, user_id, left(content, 220)'
                . ' as extrait, content, DATE_FORMAT(creation_date, \'Le %d/%m/%Y à %Hh%i\') '
                . 'AS creation_date_fr,DATE_FORMAT(update_date,\'Le %d/%m/%Y à %Hh%i\')'
                . ' AS update_date_fr, (SELECT COUNT(*) FROM comments WHERE moderation = 0 '
                . 'AND post_id = post.id) AS counter FROM post ORDER BY creation_date DESC LIMIT 0, 6');

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

    public function addPost($post) {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO post(title, user_id, content, creation_date) '
                . 'VALUES(:title, 1, :content, NOW ) ');
        $req->bindValue(':title',$post->getTitle());
        $req->bindValue(':user_id',$post ->getUserId(1));
        $req->bindValue(':content',$post->getContent());   
        $result =$req->execute();
        if($result){
            header('Location:admin.php');
        }
    }

    public function updatePost(post $post) {
        $db = $this->dbConnect();
        $resultat = $db->prepare('UPDATE post SET title = :title, user_id = 1, content=:content,'
                . 'update_date = :update_date WHERE :id = id');
        $resultat->bindValue(':title', $post->getTitle());
        $resultat->bindValue(':content', $post->getContent());
        $resultat->bindValue(':update_date', $post->getUpdateDate());
        $resultat->bindValue(':id',$post->getId());
        $resultat->execute();
    }

    public function deletePost($id) {
        $db = $this->dbConnect();
        $req = $db->exec('DELETE FROM post WHERE :id=id');
        $resultat->binvalue(':id',$id);
        $resultat->execute();
    }

}
