<?php

require_once("../app/model/Manager.php");
require_once("../app/model/Comments.php");

class CommentManager extends Manager {

    /**
     * 
     * @param type $postId
     * @return type
     * 
     */
    public function getComments($postId) {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT'
                . '(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr '
                . 'FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

   
    public function postComment($postId, $author, $comment) {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, '
                . 'comment_date, moderation) VALUES(?, ?, ?, NOW(), 0)');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }


    public function showAllComments() {
        $comments = array();
        $db = $this->dbConnect();
        $q = $db->query('SELECT * FROM comments');
        while ($data = $q->fetch(PDO::FETCH_ASSOC)) {
            $comments[] = new Comment($data);
        }
        return $comments;
    }

    public function countComments() {

        $db = $this->dbConnect();
        $req = $db->query('SELECT COUNT(*) AS nbcomments FROM comments GROUP BY post_id');

        $data = $req->fetchAll();
        $req->closecursor();
        return $data;
                
        }
        
        
    

    //Commentaires qui sont signalés
    public function signaledComment($id) {

        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id FROM comments WHERE id= :id AND moderation > 0');
        $req->execute(array('id' => $id));
        $signal = $req->fetch();

        if (empty($signal)) {
            return false;
        } else {
            return true;
        }
    }

    //front-office : Ils signalent le commentaire : moderation passe à 1
    public function reportComment($id) {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comments SET moderation = 1 WHERE :id = id');
        $req->execute(array(':id',$id));
        
    }

    //back-office : Jean  decide de l'accepter : moderation repasse à 0
    Public function validate($id) {
        $db = $this->dbConnect();
        $valide = $db->exec('UPDATE comments SET moderation = 0 WHERE  :id =  id');
        
    }

    //back-office : Jean decide de le bannir : moderation passe à 2s
    public function ban($id) {
        $db = $this->dbConnect();
        $ban = $db->exec('UPDATE comments SET moderation = 2 WHERE  id = ' . $_POST['id']);
       
    }

}
