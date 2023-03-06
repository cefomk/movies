<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Movies</title>
</head>

<body>
    <header class="header">
        <h1>Movies</h1>
        <nav>
            <ul>
                <?php if(($_SESSION['login'])) { ?>
                        <li><a href="./login/deconnexion.php">Deconnexion</a></li>
                <?php } else { ?>
                        <li><a href="./login/">Connexion</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>