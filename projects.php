<?php include "inc/functions.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jamie van der Maat">
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolio</title>
</head>
    <body>
        <?php
        navbar();
        ?>
         <section class="projects-section">
        <h1 class="projects-title">Mijn Projecten</h1>
        <div class="projects-row">
            <img src="img/coinCove.png" alt="CoinCove" class="project-image">
            <img src="img/matchThePicture.png" alt="Match the Picture" class="project-image">
            <img src="img/MemorAA.png" alt="MemorAA" class="project-image">
        </div>
        <a href="https://github.com/Jamie90989" target="_blank" class="projects-github-link">My GitHub</a>
    </section>
    </body>
</html>