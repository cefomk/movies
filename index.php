<?php
// Lister les films
require './inc/fonctions.php';
require './inc/pdo.php';

$sqlRequest = "SELECT * FROM movies_full WHERE title like '%vadrouille%'";
// $sqlRequest = "SELECT * FROM movies_full ";

$resultat = $conn->prepare($sqlRequest);
$resultat->execute();
$films = $resultat->fetchAll();

dd($films);