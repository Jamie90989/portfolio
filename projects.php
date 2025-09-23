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
            <div>
                <img onclick="window.location.href='https://github.com/KaiVerschuren/Proftaak'" src="img/coinCove.png" alt="CoinCove" class="project-image">
                <p>CoinCove: <br> Een crypto website. <br> PHP, JS, HTML, CSS, API, Database</p>
            </div>
            <div>
                <img onclick="window.location.href='https://github.com/Jamie90989/MatchThePicture'" src="img/matchThePicture.png" alt="Match the Picture" class="project-image">
                <p>Match the Picture: <br> Een spel waar je het plaatje met de text combineert. <br> PHP, JS, HTML, CSS, Database</p>
            </div>
            <div>
                <img onclick="window.location.href='https://github.com/Jamie90989/MemorAA'" src="img/MemorAA.png" alt="MemorAA" class="project-image">
                <p>MemorAA: <br> Een Memory spel. <br> PHP, JS, HTML, CSS, Database</p>
            </div>
            <div>
                <img onclick="window.location.href='https://https://github.com/Jamie90989/WordClock'" src="img/clock.png" alt="MemorAA" class="project-image">
                <p>Word Clock: <br> Een klok die met text laat zien hoe laat het is. <br> C++, C, HTML</p>
            </div>
               <div>
                <img onclick="window.location.href='https://github.com/Jamie90989/TickTackChessFinal'" src="img/TickTackChess.png" alt="TickTackChess" class="project-image">
                <p>Tick Tack Chess: <br> Een schaakspel maar dan als Boter Kaas en Eieren. <br> C#</p>
            </div>
        </div>
        <a href="https://github.com/Jamie90989" target="_blank" class="projects-github-link">Mijn GitHub</a>
    </section>
    </body>
</html>