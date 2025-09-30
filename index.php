<?php
require 'header.php';

require 'data.php';
?>

<header>
    <h1>Champions League teams</h1>
</header>

<main>

    <ul>
        <?php foreach ($teams as $key => $value) { ?>
            <li>
                <?php for ($i = 0; $i < count($teams); $i++) { ?>
                    <?php echo $key[$i]; ?> <?php }
                                    }; ?>
            </li>
    </ul>

</main>

<?php
require 'footer.php';
