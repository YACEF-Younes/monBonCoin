<?php

use App\Db;
use Models\Users;



require_once('autoloader.php');
// Test de l'autoloader
// $objetdB = new Db;
// $objetdB::getDb();
?>



<h1>Index : fichier de test</h1>
<p>C'est ici que nous allons tester tous nos CRUD</p>
<!-- Pour utiliser les méthodes des CRUD il faut faire un require des class dont nous aurons besoin -->
<!-- Comme nous ne voulons pas faire des require toutes les deux minutes nous allons utiliser un autoloader -->


<h2>Utilisation de la méthode finAll sur users</h2>

<?php
$objetDb = new Db;
$users = Users::findAll();
var_dump($users);