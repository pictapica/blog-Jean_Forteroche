<?php

require_once('../app/model/PostManager.php');
require_once('../app/model/CommentManager.php');
require_once('../app/model/userManager.php');


function login(){
    require('../view/backend/login.php');
}

function listPosts() {
    $postManager = new PostManager(); //Création d'un objet
    $CommentManager = new CommentManager();

    $posts = $postManager->getPosts(); //Appel d'une fonction de cet objet
    //$nb_comments = $CommentManager->countComments();

    require('../app/view/backend/allPosts.php');
}
function post() {
    $postManager = new PostManager();
    $CommentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $CommentManager->getComments($_GET['id']);
    
    require('../app/view/backend/onePost.php');
}
function addPost ($title, $content) {
    $postManager = new PostManager();
    $posts =$postManager->addPost($title, $content);
    
    header ('Location: editPost.php?action=');
}

function deletePost ($postid) {
    $postManager = new PostManager();
    $postManager->detelePost($postid);
    
    header('Location : admin.php?action=');
}

function updatePost() {
    $postManager = new PostManager();
    $postManager->updatePost($_POST['title'],$_POST['content'],$_GET['id'],$_GET['user_id']);
    
    //header(...
}

function updateComment() {
   $commentmanager = new CommentManager();
  $commentmanager->updateComment($_POST['author'],$_POST['comment'],$_GET['id']);
  header ('Location: chapters.php');
}


function deleteComment($getid) {
  $commentmanager = new CommentManager();
  $comment = $commentManager->deleteComment($_GET['id']);
 
 header('Location : admin.php?action=deleteComment');
}
      
// Reporte les commentaires signalés
function reportComment($postId, $commentId) {
    

if (isset($signal)) {
                $moderation = new Moderation([
                                                 'message'     => 'signale',
                                                 'commentsid'  => $comm,
                                                 'userid'      => $somebody,
        ]);
                if ($CommentManager->hasModeration($comm) == FALSE) {
                    $ModerationManager->addModeration($moderation);
                    $ModerationManager->updateSignaled($comm, $somebody);
                } else {
                    $ModerationManager->updateSignaled($comm, $somebody);
                    $mess = setFlash("Attention !", "vous avez déjà signalé ce commentaire", "danger");
                }
            }
        
        
    header('Location: chapters.php?action=comment&id=' . $postId, $commentId);
    }

