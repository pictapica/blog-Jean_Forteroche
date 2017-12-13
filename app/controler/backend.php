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

    include('../app/view/backend/allposts.php');
}

function addchapter ($title, $content) {
    $postManager = new PostManager();
    $posts =$postManager->addPost($title, $content);
    
    header ('Location: editPost.php?action=');
}

function deletechapter ($postid) {
    $postManager = new PostManager();
    $postManager->detelePost($postid);
    
    header('Location : admin.php?action=');
    echo'votre chapitre bien été supprimé !';
}

function updatechapter() {
    $postManager = new PostManager();
    $postManager->updatePost($_POST['title'],$_POST['content'],$_GET['id'],$_GET['user_id']);
    
    header('Location : ');
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
function reportComment($postId, $id) {
if (isset($report)) {
               
                if ($CommentManager->signaledComment($signal) == FALSE) {
                    $CommentManager->reportcomment($moderation);
                    $CommentManager->validate($id);
                } else {
                    $CommentManager->updateSignaled();
                    echo'Attention message déjà signalé';
                }
            }
        
        
    header('Location: chapters.php?action=comment&id=' . $postId, $id);
    }

