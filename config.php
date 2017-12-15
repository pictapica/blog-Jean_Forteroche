<?php

// Affiche tout les erreurs directement dans le navigateur
ini_set('display_errors','on');
error_reporting(E_ALL);

define ('ROOT', $_SERVER['DOCUMENT_ROOT'].'/blog_projet3/');
    define ('MODEL', ROOT . 'app/model/');
    define ('VIEW', ROOT . 'app/view/');
    define ('HOST','http://' . $_SERVER['HTTP_HOST'] . '/blog_projet3/web/');
    define ('CONTROLER', ROOT . 'app/controler/');

function autoload($class)
{
        require MODEL.$class.'.php';
    }
    spl_autoload_register('autoload');
    
    include (CONTROLER.'functions.php');
