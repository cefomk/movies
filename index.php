<?php
// Lister les films
require './inc/fonctions.php';
require './inc/pdo.php';

// $sqlRequest = "SELECT * FROM movies_full WHERE title like '%vadrouille%'";
$sqlRequest = "SELECT * FROM movies_full LIMIT 30";

$resultat = $conn->prepare($sqlRequest);
$resultat->execute();
$films = $resultat->fetchAll();

// dd($films);
$i=0;
foreach($films as $film)
{
    echo $i . '<br>';
    echo $film['title'] . '<br>';
    echo $film['genres'] . '<br>';
    echo $film['cast'] . '<br>';
    echo $film['plot'] . '<br>';
    echo '<hr>';
    $i++;
}