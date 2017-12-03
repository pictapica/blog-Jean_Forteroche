<?php

class Post {

    protected $_id;
    protected $_title;
    protected $_user_id;
    protected $_content;
    protected $_creation_date;
    protected $_update_date;

    //getters
    public function getID() {
        return $this->_id;
    }

    public function getTitle() {
        return $this->_title;
    }

    public function getUserId() {
        return $this->_user_id;
    }

    public function getContent() {
        return $this->_content;
    }

    public function getCreationDate() {
        return $this->_creation_date;
    }

    public function getUpdateDate() {
        return $this->_update_date;
    }

    //setters
    public function setId($id) {
        if (is_int($id)) {
            if ($id > 0) {
                $this->_id = $id;
            }
        }
    }

    public function setTitle($title) {
        if (is_string($title)) {
            $this->_title = $title;
        }
    }

    public function setUseId($user_id) {
        if (is_int($user_id)) {
            $this->_user_id = $user_id;
        }
    }

    public function setContent($content) {
        if (is_string($content)) {
            $this->_content = $content;
        }
    }

    public function setCreationDate($creation_date) {
        if (is_string($creation_date)) {
            DateTime::createFromFormat('m/d/Y', $creation_date);
        }

        $this->_creation_date = $creation_date;
    }

    public function setUpdateDate($update_date) {
        $this->_update_date = $update_date;
    }

}
