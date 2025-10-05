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

<main>

    <div class="list-box-container">
        <?php
        ksort($teams);
        foreach ($teams as $team => $value) { ?>
            <a href="team-info.php?team=<?= $team; ?>" class="team-link">
                <article>
                    <img src="<?= $value['logo']; ?>" alt="<?= $team; ?> logo" />
                    <p><?= $team; ?></p>
                </article>
            </a>
        <?php } ?>
    </div>

</main>


<?php
require 'footer.php';

/*<a href="teams-info.php"><?php "$team[$i]"; ?></a>
            <link rel="<?= "$team[$i] : ['logo'][$i] ." ?>"> */