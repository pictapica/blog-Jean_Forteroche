<?php

require_once('../app/model/PostManager.php');
require_once('../app/model/CommentManager.php');


function listPosts() {
    $postManager = new PostManager(); //Création d'un objet
    $CommentManager = new CommentManager();

    $posts = $postManager->getPosts(); //Appel d'une fonction de cet objet
    //$nb_comments = $CommentManager->countComments();

    include('../app/view/frontend/listPostsView.php');
}

function post() {
    $postManager = new PostManager();
    $CommentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $CommentManager->getComments($_GET['id']);
    
    require('../app/view/frontend/postView.php');
}

function addComment($postId, $author, $comment) {
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        // Erreur gérée. Elle sera remontée jusqu'au bloc try du routeur !
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: chapters.php?action=post&id=' . $postId);
    }
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

