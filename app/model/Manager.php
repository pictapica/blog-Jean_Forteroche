<?php

/*
    Connexion à la base de données
  */

class Database
{

    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=blog_writer;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    }
}
