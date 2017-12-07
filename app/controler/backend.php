<?php

require_once('../app/model/PostManager.php');
require_once('../app/model/CommentManager.php');
require_once('../app/model/userManager.php');


//formulaire de connexion
function login()
{
    require('view/backend/connexion.php');
}

function showdashboard() {
    
}

function addpost ($title, $content) {
    $postManager = new PostManager();
    $posts =$postManager->addPost($title, $content);
    
    //header ('Location: chapter.php?action=
}

function deletePost ($postid) {
    $postManager = new PostManager();
    $postManager->detelePost($postid);
    
    //header('Location: chapter.php?action= ')
}

function updatePost() {
    $postManager = new PostManager();
    $postManager->updatePost($_POST['title'],$_POST['content'],$_GET['id'],$_GET['user_id']);
    
    //header(...
}

/*function updateComment() {
 *  $commentmanager = new CommentManager();
 *  $commentmanager->updateComment($_POST['author'],$_POST['comment'],$_GET['id']);
 * header ('Location: chapters.php
 */

/*function deleteComment() {
 *  $commentmanager = new CommentManager();
 *  $comment = $commentManager->deleComment($_GET['id]);
 * 
 * header('Location : chapters.php?action=
 */