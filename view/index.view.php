<?php
// Header,footer, echo 'test'
require './partials/head.php';

$i=1;
foreach(getMovieLimit(5) as $film)
{
    echo $i . '<br>';
    echo $film['title'] . '<br>';
    echo $film['genres'] . '<br>';
    echo $film['cast'] . '<br>';
    echo $film['plot'] . '<br>';
    echo '<hr>';
    $i++;
}

require './partials/foot.php';