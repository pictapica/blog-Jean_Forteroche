<?php

require_once("../model/UserManager.php");
require_once("../model/User.php");
$manage = new UserManager();
$user = new User();

if (isset($_POST['inscription']) && isset($_POST['pseudo'])) {
    if (empty($_POST['firstname'])) {
        header('Location:../view/frontend/login.php?message=no_firstname');
    } elseif (empty($_POST['name'])) {
        header('Location:../view/frontend/login.php?message=no_name');
    } elseif (empty($_POST['pseudo'])) {
        header('Location:../view/frontend/login.php?message=no_pseudo');
    } elseif (empty($_POST['email'])) {
        header('Location:../view/frontend/login.php?message=no_email');
    } elseif (empty($_POST['password'])) {
        header('Location:../view/frontend/login.php?message=no_password');
    } else {
        $pwdsecure = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
        if ($pwdsecure == $pass_hache) {
            $user = new User(['firstname' => htmlspecialchars($_POST['firstname']),
                'name' => htmlspecialchars($_POST['name']),
                'pseudo' => htmlspecialchars($_POST['pseudo']),
                'email' => htmlspecialchars($_POST['email']),
                'password' => $pwdsecure]);
            header('Location:../view/frontend/login.php?message=access_denied');
        } else {
            $manage->addUser($user);
            $getid = $user->getUserID();
            $_SESSION['id'] = $user->getPseudo();
            header('Location:../view/backend/admin.php' . $_SESSION['id']);
        }
    }
}