<?php

session_start();
include_once '../model/userManager.php';
$user = new UserManager();


    if (!isset($_POST['pseudo']) OR ! isset($_POST['password'])) {

        header('Location:../view/frontend/login.php?message=no_data');
        exit();
    }
    if (!isset($_POST['pseudo'])) {
        header('Location:../view/frontend/login.php?message=bad_pseudo');
        exit();
    } elseif (!isset($_POST['password'])) {
        header('Location:../view/frontend/login.php?message=no_password');
        exit();
    } else {

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = sha512($_POST['password']);

        // Hachage du mot de passe
        $password_hache = sha512($_POST['password']);

        if ($password_hache == $password) {
            //vérification des identifiants 
            $user = $userManager->connect($_POST['pseudo'], $_POST['password']);
            if (empty($user)) {
                echo'Mauvais identifiant ou mot de passe !';
            } else {
                $_SESSION['pseudo'] = $resultat['pseudo'];
                $_SESSION['email'] = $resultat['email'];
                header('Location:../view/frontend/dashboard.php');
            }
        }
    }

