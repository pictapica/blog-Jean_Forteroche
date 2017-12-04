<?php

Class Comments {

    protected $_id;
    protected $_post_id;
    protected $_author;
    protected $_comment;
    protected $_comment_date;

    public function getId() {
        return $this->_id;
    }

    public function getPostId() {
        return $this->_post_id;
    }

    public function getAuthor() {
        return $this->_author;
    }

    public function getComment() {
        return $this->_comment;
    }

    public function getCommentDate() {
        return $this->_comment_date;
    }

    public function setId($id) {
        if (is_int($id)) {
            if ($id > 0) {
                $this->_id = $id;
            }
        }
    }

    public function setPostId($post_id) {
        if (is_int($post_id)) {
            if ($post_id > 0) {
                $this->_id = $post_id;
            }
        }
    }
    
    public function setAuthor($author)
        {
            if (is_string($author)) {
                $this->_title = $author;
            }
        }
        
    public function setComment($comment) {
        if (is_string($comment)) {
            $this->_content = $comment;
        }
    }   
    
    public function setCommentDate($comment_date) {
        if (is_string($comment_date)) {
            $this->_content = $comment_date;
        }
    } 
    
}