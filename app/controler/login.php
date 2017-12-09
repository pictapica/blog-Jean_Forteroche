<?php


include_once '../model/userManager.php';
$userManager = new UserManager();


    if (empty($_POST['pseudo']) OR empty($_POST['password'])) {

        header('Location:../view/frontend/login.php?message=no_data');
        exit();
    }
    if (empty($_POST['pseudo'])) {
        header('Location:../view/frontend/login.php?message=bad_pseudo');
        exit();
    } elseif (!isset($_POST['password'])) {
        header('Location:../view/frontend/login.php?message=no_password');
        exit();
    } else {

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = sha1($_POST['password']);

        // Hachage du mot de passe
        $password_hash = sha1($_POST['password']);

        if ($password_hash == $password) {
            //vérification des identifiants 
            $result = $userManager->connect($_POST['pseudo'], $_POST['password']);
            if (!isset($result)) {
                header('Refresh:2, url=../view/frontend/login.php?message=internal_error');
                echo'Mauvais identifiant ou mot de passe !';
            } else {
                $_SESSION['pseudo'] = $result['pseudo'];
                $_SESSION['password'] = $result['password'];
                header('Location:../view/frontend/admin.php');
            }
        }
    }

