<?php
require $_SERVER['DOCUMENT_ROOT'].'/p4/config.php';

class Manager
{
    protected function dbConnect()
    {
        try {
            $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=utf8', USERNAME, PWD);
            return $db;
        } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
    }
    
}
