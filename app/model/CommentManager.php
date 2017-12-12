<?php

require_once("../app/model/Manager.php");

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

    /**
     * 
     * @param type $postId
     * @param type $author
     * @param type $comment
     * @return type
     * 
     */
    /**public function postComment($postId, $author, $comment) {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, '
                . 'comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
        
    }**/

    
    public function postComment($postId, $author, $comment) {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, '
                . 'comment_date, moderation) VALUES(?, ?, ?, NOW(), 0)');
        $affectedLines = $comments->execute(array($postId, $author, $comment));
            
            

        return $affectedLines;
        
    }
      
    /* public function reportComment() {
     *   $db = $this->dbConnect();
     *    
      } */

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
            $nb_comments = $db->query('SELECT COUNT(*) AS counter FROM comments GROUP BY post_id');

            while ($data = $nb_comments->fetch())
            {
                echo $data['counter'] .'<br/>';
            }
            $nb_comments->closeCursor();
      
    }
    
public function deleteComment(){
    
}
    
public function updateComment(){
    
}
    

public function signalComment(){
    
}
}
