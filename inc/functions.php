<?php

function navbar()
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    ?>
    
    <header>
        <a class="logo" href="index.php">
            <img src="img/portfolioLogo.png" alt="Logo">
        </a>
        <div class="navbarCenter">
            <button class="<?= ($currentPage == 'aboutMe.php') ? 'active' : '' ?>">
                <a href="aboutMe.php">About me</a>
            </button>
            <button class="<?= ($currentPage == 'projects.php') ? 'active' : '' ?>">
                <a href="projects.php">My projects</a>
            </button>
            <button class="<?= ($currentPage == 'knowledge.php') ? 'active' : '' ?>">
                <a href="knowledge.php">My knowledge</a>
            </button>
        </div>
    </header>
    
    <?php
}


