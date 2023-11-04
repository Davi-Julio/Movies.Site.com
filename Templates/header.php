<?php

include_once "helpers/url.php";
include_once "config.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies.com</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/mediaQuery.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <header class="header">
        <div class="logo">
            <h1>Movies.Com</h1>
        </div><!--logo-->

        <nav class="nav">
            <ol>
                <li><a href="<?= $BASE_URL ?>">Home</a></li>
                <li><a id="topmovies" href="<?= $BASE_URL ?>/list-movies.php">Top Movies 2023</a></li>
                <li><a href="<?= $BASE_URL ?>/contato.php">Contact</a></li>
                <li><a href="<?= $BASE_URL ?>/aboutUs.php">About Us</a></li>
            </ol>
        </nav><!--nav-->
    </header><!--header-->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>