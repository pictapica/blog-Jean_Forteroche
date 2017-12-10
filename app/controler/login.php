<?php
session_start();

include_once '../model/userManager.php';
$userManager = new UserManager();
if (!empty($_POST)){
    if (empty($_POST['pseudo']) OR empty($_POST['password'])) {

        header('Location:../view/frontend/login.php?message=no_data');
        exit();
    }
    if (empty($_POST['pseudo'])) {
        header('Location:../view/frontend/login.php?message=no_pseudo');
        exit();
    } elseif (empty($_POST['password'])) {
        header('Location:../view/frontend/login.php?message=no_password');
        exit();
    } else {

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

        // Hachage du mot de passe
        $pass_hache = password_hash($_POST['password'],PASSWORD_DEFAULT);

        if ($pass_hache == $password) {
            //vérification des identifiants 
            $result = $userManager->connect($_POST['pseudo'], $_POST['pass_hache']);
            if (!isset($result)) {
                header('Refresh:2, url=../view/frontend/login.php?message=internal_error');
                echo'Mauvais identifiant ou mot de passe !';
            } else {
                $_SESSION['pseudo'] = $result['pseudo'];
                $_SESSION['password'] = $result['pass_hache'];
                header('Location:../view/backend/admin.php');
            }
        }
    }
}