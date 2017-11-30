<?php



class Manager {

    protected function dbConnect() {
        $db = new \PDO('mysql:host=localhost;dbname=blog_writer;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    }

}
