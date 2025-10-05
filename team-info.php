<?php
require 'header.php';

require 'data.php';
?>

<header>
    <div class="header-box">
        <img src="canva-header.png" alt="header-picture">
    </div>
</header>

<div class="nav-container">
    <nav>
        <a href="index.php">Start</a>
        <a href="about.php">About</a>
    </nav>
</div>

<?php
$teamName = $_GET['team'];
$team = $teams[$teamName];
?>

<div class="team-detail">
    <h1><?= $teamName; ?></h1>
    <img src="<?= $team['logo']; ?>" alt="<?= $teamName; ?> logo" />

    <p><strong>League:</strong> <?= $team['league']; ?></p>

    <p><strong>Uefa coefficient ranking:</strong> <?= $team['uefa-coefficient-ranking']; ?></p>

    <p><strong>City:</strong> <?= $team['city']; ?></p>

    <p><strong>Opponents:</strong></p>
    <ul>
        <?php foreach ($team['opponents'] as $opponent) { ?>
            <li><?= $opponent; ?></li>
        <?php } ?>
    </ul>

    <p><strong>Website:</strong>
        <a href="<?= $team['url']; ?>" target="_blank">
            <?= $team['url']; ?>
        </a>
    </p>

</div>

<?= require 'footer.php'; ?>