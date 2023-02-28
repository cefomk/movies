<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

function dbug($valeur)
{
    echo "<pre style='background-color:black;color:white;padding: 15px;overflow: auto;'>";
    var_dump($valeur);
    echo "</pre>";
}

function dd($valeur)
{
    echo "<pre style='background-color:black;color:white;padding: 15px;overflow: auto;height: 500px;'>";
    var_dump($valeur);
    // print_r($valeur);
    echo "</pre>";
    die();
}

function cleanData($valeur)
{
    if (!empty($valeur) && isset($valeur)) :
        $valeur = htmlentities(trim($valeur));
        return $valeur;
    else :
        return false;
    endif;
}

function textData($valeur)
{
    $valeur = preg_match('/^[a-z-A-Z]*$/', $valeur);
    return $valeur;
}
