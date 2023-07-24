<?php
namespace App;

use PDO;

use PDOException;

// Cette classe permet de se connecter à la BDD en utilisant le pattern Singleton
class Db{
    private static $db; // pour stocker mon objet PDO

    // Singleton
    static function getDb(){
        if(!self::$db){
            try {
                // Chemin vers config.json depuis le dossier public
                // $config = file_get_contents('../App/config.json');
                // Chemin vers config.json depuis le dossier racine
                $config = file_get_contents('App/config.json');

                // var_dump($config);
                // Pour pouvoir utiliser un fichier json il faut le decoder
                $config = json_decode($config);
                // var_dump($config);
                // echo "test";
                // On crée l'objet PDO
                self::$db = new PDO("mysql:host=" . $config->host . ";dbname=" .$config->dbName, $config->user,$config->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            } catch (PDOException $err) {
                echo "problème de connexion à la base de donnée : " . $err->getMessage();
            }
        }
        return self::$db;
    }
}

$objetdB = new Db;

$objetdB::getDb();

