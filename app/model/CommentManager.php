<?php

class CommentManager extends Manager {

    public function showAllComments() {
        $comments = array();

        $q = $this->_db->query('SELECT * FROM comments');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $comments[] = new Comment($donnees);
        }
        return $comments;
    }

    public function showCommentsPost($postid) {
        $commPost = array();

        $q = $this->_db->query('SELECT * FROM comments WHERE post_id =' . $postid);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $commPost[] = new Comment($donnees);
        }
        return $commPost;
    }

    public function showLastComments() {
        $comments = array();

        $q = $this->_db->query('SELECT * FROM comments ORDER BY datecreated DESC LIMIT 0, 5');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $comments[] = new Comment($donnees);
        }
        return $comments;
    }
    
     public function addComment() {
         
     }
}
//Moderation ici ? 
    