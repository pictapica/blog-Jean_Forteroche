<?php

require_once('../app/model/PostManager.php');
require_once('../app/model/CommentManager.php');

function listPosts() {
    $postManager = new PostManager(); //Création d'un objet
    $commentManager = new CommentManager();

    $posts = $postManager->getPosts(); //Appel d'une fonction de cet objet
    //$nb_comments = $commentManager->countComments();

    include('../app/view/frontend/listPostsView.php');
}

function post() {
    $postManager = new PostManager();
    $CommentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $CommentManager->getComments($_GET['id']);

    require('../app/view/frontend/postView.php');
}

function addComment($postId, $author, $comment, $moderation) {
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment, $moderation);

    if ($affectedLines === false) {
        // Erreur gérée. Elle sera remontée jusqu'au bloc try du routeur !
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: chapters.php?action=post&id=' . $postId);
    }
}

function signal($id) {
    $commentManager = new CommentManager();

    $report = $commentManager->reportComment($id);

    
      header('Location : chapters.php?action=get&id=' . $_GET['id']);
    }

