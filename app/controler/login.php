<?php
session_start();

$usermanager = new UserManager();

if (isset($_POST['connect']))
    {
        if (empty($_POST['pseudo']) && empty($_POST['password']))
        {
            $mess = setFlash("Oupsss !", 'Il semble que vous ayez oublié de vous identifier...', 'warning');
            header('refresh: 2; connexion');
        }
        if (empty($_POST['pseudo']))
           {
               $mess = setFlash("Oupsss !", 'Veuillez renseigner votre pseudo !', 'warning');
               header('refresh: 2; connexion');
    
           }
        elseif (empty($_POST['password'])) {
            $mess = setFlash('Oupsss !', 'Vous avez oublié votre mot de passe ?', 'warning');
            header('refresh: 2; connexion');
    
        } else {
        //vérification pseudo/mot de passe de l'utilisateur
            $user = $usermanager->verifUser($_POST['pseudo'], $_POST['password']);
            if (!empty($user)) {
                $sess = new Session($user);
                $_SESSION['id'] = $user["user_id"];
                $_SESSION['pseudo'] = $user["pseudo"];
                header('Location:dashboard-'.$_SESSION['id']);
            } else {
                $mess = setFlash("Attention !", "Pseudo ou mot de passe erroné", "danger");
                header('refresh: 2; connexion');
    
            }
        }
    }