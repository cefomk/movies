<?php
// Lister les films
require './inc/fonctions.php';
require './inc/pdo.php';

// dd(getMovieLimit(2));

$i=1;
foreach(getMovieLimit(10) as $film)
{
    echo $i . '<br>';
    echo $film['title'] . '<br>';
    echo $film['genres'] . '<br>';
    echo $film['cast'] . '<br>';
    echo $film['plot'] . '<br>';
    echo '<hr>';
    $i++;
}