<?php
/** require('../app/controler/backend.php');

$manage = new ChapterManager();

if (empty($_SESSION))
    {
    header('Location:connexion');
    } else {
    
        if (isset($_POST['add]) || isset($_POST['edit']) || isset($_POST['update']) || isset($_POST['num'])) {
            if (empty($_POST['title']))
            {
                setFlash('Attention !','Vous devez rentrer un titre de chapitre', 'warning');
            }
            elseif (empty($_POST['number']))
            {
                setFlash('Attention !','Vous devez rentrer un numéro de chapitre', 'warning');
            }
            elseif (empty($_POST['texte']))
            {
                setFlash('Attention !','Vous avez oublié le texte de votre chapitre', 'warning');
            } else {
                $post = new Post([
                                           'title'  => htmlspecialchars($_POST['title']),
                                           'number => htmlspecialchars($_POST['number']),
                                           'texte'  => $_POST['texte'],
                                           'userid' => htmlspecialchars($_SESSION['id'])
                                       ]);
            }
            if (isset($_POST['add'])) {
                $manage->addPost($post);
                header('refresh: 2; url=editPost.php'. $_SESSION['id']);
            } elseif (isset($_POST['publication'])) {
                $manage->editPost($post);
                header('refresh: 2; editPost-'. $_SESSION['id']);
            }
            
            if (isset($_POST['update']) && isset($id)) {
                $manager->updatePost($post, $idC, 1);
                
                header('refresh: 2; editpost-'. $_SESSION['id']);
            } elseif (isset($_POST['edit']) && isset($idC)) {
                $manager->updatepost($post, $idC, 2);
                header('refresh: 2; editpost-'. $_SESSION['id']);
            }
        }
**/    
