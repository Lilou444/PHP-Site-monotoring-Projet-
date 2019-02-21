<?php include(PWD_TEMPLATES . '/incs/head.php'); ?>

<?php 

$objetPdo = new PDO('mysql:DATABASE_HOST=localhost; DATABASE_NAME=example','root','root'); 

//préparation de la requête 

$pdoPrep = $objetPdo->prepare('DELETE FROM example WHERE id=:num');

//execution