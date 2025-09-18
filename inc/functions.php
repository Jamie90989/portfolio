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
                <a href="aboutMe.php">Over mij</a>
            </button>
            <button class="<?= ($currentPage == 'projects.php') ? 'active' : '' ?>">
                <a href="projects.php">Mijn Projecten</a>
            </button>
            <button class="<?= ($currentPage == 'knowledge.php') ? 'active' : '' ?>">
                <a href="knowledge.php">Mijn Vaardigheden</a>
            </button>
        </div>
        <div class="navbarMobile">
            <details class="navDetails">
                <summary class="navSummary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" class="dropdownIcon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </summary>
                <div class="navButtons">
                    <button class="">
                        <a href="aboutMe.php">Over mij</a>
                    </button>
                    <button class="">
                        <a href="projects.php">Mijn Projecten</a>
                    </button>
                    <button class="">
                        <a href="knowledge.php">Mijn Vaardigheden</a>
                    </button>
                </div>
            </details>

        </div>
    </header>

<?php
}
