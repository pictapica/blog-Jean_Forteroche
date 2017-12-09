<?php

session_start();
include_once '../model/userManager.php';

if (isset($_POST['connect'])) {
    if (!isset($_POST['pseudo']) OR ! isset($_POST['password'])) {

        header('refresh: 2; url=../view/frontend/login.php?message=no_data');
        exit();
    }
    if (!isset($_POST['pseudo'])) {
        header('refresh: 2; url=../view/frontend/login.php?message=bad_pseudo');
        exit();
    } elseif (!isset($_POST['password'])) {
        header('refresh: 2; url=../view/frontend/login.php?message=no_password');
        exit();
    } else {
        //Sécurisation des données
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $pass = sha1($_POST['pass']);

        // Hachage du mot de passe
        $pass_hache = sha1($_POST['pass']);

        if ($pass_hache == $pass) {
            
        }
    }
}