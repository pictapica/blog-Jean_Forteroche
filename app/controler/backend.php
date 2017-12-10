<?php

require_once('../app/model/PostManager.php');
require_once('../app/model/CommentManager.php');
require_once('../app/model/userManager.php');

//formulaire de connexion
function login(){
    require('../view/backend/connexion.php');
}

function showdashboard() {
    
}

function addPost ($title, $content) {
    $postManager = new PostManager();
    $posts =$postManager->addPost($title, $content);
    
    //header ('Location: admin.php?action=
}

function deletePost ($postid) {
    $postManager = new PostManager();
    $postManager->detelePost($postid);
    
    header('Location : admin.php?action=deletePost');
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

