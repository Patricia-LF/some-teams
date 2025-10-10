<?php
require 'header.php';

require 'data.php';
?>

<!--<header>
    <div class="header-box">
        <img src="CL.jpg" alt="header-picture">
    </div>
</header>-->

<div class="nav-container">
    <div class="nav-cont-img"><img src="logga.png" alt="header-picture"></div>
    <nav>
        <a href="index.php">Start</a>
        <a href="about.php">About</a>
    </nav>
</div>

<main>

    <div class="teams-container">
        <h1>Teams</h1>
        <div class="list-box-container">
            <?php
            ksort($teams);
            foreach ($teams as $team => $value) { ?>
                <a href="team-info.php?team=<?= $team; ?>" class="team-link">
                    <section>
                        <img src="<?= $value['logo']; ?>" alt="<?= $team; ?> logo" />
                        <p><?= $team; ?></p>
                    </section>
                </a>
            <?php } ?>
        </div>
    </div>
</main>


<?php
require 'footer.php';

/*<a href="teams-info.php"><?php "$team[$i]"; ?></a>
            <link rel="<?= "$team[$i] : ['logo'][$i] ." ?>"> */