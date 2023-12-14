<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Imagine Dragons</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="Style/bonusw5.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <section class="header">
        <video autoplay loop muted>
            <source src="Ressource/Extrait Ennemy 2.mp4" type="video/mp4">
        </video>
        <a href="accueil.html"><img src="Ressource/Imagine-Dragons-Logo.png" alt="logo"></a>
        <section class="header-right">
            <a href="biographie.html">Biographie</a>
            <a href="discographie.html">Discographie</a>
            <a href="bonusw5.php">Chercher un titre</a>
            <a href="add.php">Ajouter un titre</a>
        </section>
    </section>

    <section class="form">
        <h2>Ajout d'une chanson</h2>
        <form method="post">
            <input type="text" name="titre" class="search" placeholder="Lonely..">
            <button type="submit" name="submit">Ajouter un titre</button>
        </form>
    </section>
</body>

</html>