<?php
session_start();
include_once '../model/userManager.php';

if (isset($_POST['connect']))
    {
        if (!isset($_POST['pseudo']) OR ! isset($_POST['password']))
        {
            $mess = setFlash("Oups !", 'Vous ayez oublié de vous identifier...', 'warning');
            header('refresh: 2; url=../view/login.php');
        }
        if (empty($_POST['pseudo']))
           {
               $mess = setFlash("Oupsss !", 'Veuillez renseigner votre pseudo !', 'warning');
               header('refresh: 2; url=../view/login.php');
    
           }
        elseif (empty($_POST['password'])) {
            $mess = setFlash('Oupsss !', 'Vous avez oublié votre mot de passe ?', 'warning');
            header('refresh: 2; url=../view/login.php');
    
        } else {
        //vérification pseudo/mot de passe de l'utilisateur
            $user = $usermanager->connect($_POST['pseudo'], $_POST['password']);
            if (!empty($user)) {
             
    
            }
        }
    }