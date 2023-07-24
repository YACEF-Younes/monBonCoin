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
?>

<h2>Utilisation de la méthode findById sur users</h2>

<?php
$idUsers = new Users;
var_dump($idUsers->findById(1));
?>

<h2>Utilisation de la méthode findByLogin sur users</h2>

<?php
$loginUsers = new Users;
var_dump($loginUsers->findByLogin('user1@gmail.com'));
?>

<h2>Utilisation de la methode create() sur users</h2>
<?php
    $pass = password_hash('12345678', PASSWORD_DEFAULT);
    $data = ['jarjar@gmail.com', $pass, 'jarjar', 'Binks', '21 rue de Sheev', '93333', 'Naboo', 3];
    // A chaque fois qu'on relance ca creer un nouveau user
    // Users::create($data); 

   
?>

<h2>Utilisation de la methode create() sur users</h2>
<?php
Users::update($data);

?>


<h2>Utilisation de la methode create() sur users</h2>

<?php
Users::delete(3);

?>