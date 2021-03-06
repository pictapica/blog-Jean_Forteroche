<?php
require_once(dirname(__DIR__).'/model/PostManager.php');
require_once(dirname(__DIR__).'/model/CommentManager.php');
require_once(dirname(__DIR__).'/model/userManager.php');

function login() {
    require('../view/backend/login.php');
}

function listPosts() {
    $postManager = new PostManager(); //Création d'un objet
    $CommentManager = new CommentManager();

    $posts = $postManager->getPosts(); //Appel d'une fonction de cet objet
    //$nb_comments = $CommentManager->countComments();
    
    include('../app/view/backend/allPosts.php');
}

function post() {
    $postManager = new PostManager();
    $CommentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $CommentManager->getComments($_GET['id']);

    require('../app/view/backend/post.php');
}

function addChapter() {
    $title = htmlspecialchars($_POST['title']);
    $content = $_POST['content'];

    if ((!empty($title)) && (!empty($content))) {
        $post = new post();
        $post->setTitle($title);
        $post->setContent($content);
        $post->setUserId('1');

        $chapAdd = new PostManager();
        $addChapter = $postManager->addPost($post);

        header('Location: editPost.php');
    }
}

function deleteChapter() {
    $id = htmlspecialchars($_POST['id']);
    
    if(!empty($id)){
        
        $deleteChap =new PostManager();
        $chapDelete = $deleteChap ->deletePost($id);
    
    header('Location : admin.php?action=editPost');
    }
}

function updateChapter() {
    $title = htmlspecialchars($_POST['title']);
    $content = $_POST['content'];
    $id = htmlspecialchars($_POST['id']);

    if ((!empty($titre)) && (!empty($content)) && (!empty($id))) {
        $post = new Post();
        $post->setTitle($title);
        $post->setContent($content);
        $post->setUserId('1');

        $chapUpdate = new PostManager();
        $updateChapter = $chapUpdate->updatePost($post);

        header('Location : admin.php?action=editPost');
    }
}

function updateComment() {
    $commentmanager = new CommentManager();
    $commentmanager->updateComment($_POST['author'], $_POST['comment'], $_GET['id']);
    header('Location: chapters.php');
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
